<#
Merge forecast CSV with the project keyword CSV (Arabic)
Usage:
  1. Save your Google Ads forecast CSV as `docs/forecast.csv` in the repo root.
  2. From repo root run (PowerShell):
     powershell -ExecutionPolicy Bypass -File .\scripts\merge_forecast.ps1
  3. Output is `docs/keywords_with_forecast.csv`.

Notes:
- The script tries to match by exact Keyword text. If it doesn't find an exact match it will attempt a case-insensitive containment match.
- It preserves all original columns from `docs/keywords_ar.csv` and appends forecast columns when available.
- Uses UTF8 encoding.
#>

$repoRoot = Split-Path -Parent $MyInvocation.MyCommand.Definition
$keywordsPath = Join-Path $repoRoot "..\docs\keywords_ar.csv" | Resolve-Path -Relative
$forecastPath = Join-Path $repoRoot "..\docs\forecast.csv" | Resolve-Path -Relative
$outputPath = Join-Path $repoRoot "..\docs\keywords_with_forecast.csv" | Resolve-Path -Relative

if (-not (Test-Path $keywordsPath)) {
    Write-Error "Could not find keywords file at $keywordsPath. Make sure docs/keywords_ar.csv exists."
    exit 1
}

if (-not (Test-Path $forecastPath)) {
    Write-Error "Could not find forecast file at $forecastPath. Place your Google Ads forecast CSV at docs/forecast.csv and run again."
    exit 1
}

Write-Host "Reading keywords from: $keywordsPath"
$keywords = Import-Csv -Path $keywordsPath -Encoding UTF8
Write-Host "Reading forecast from: $forecastPath"
$forecast = Import-Csv -Path $forecastPath -Encoding UTF8

# Normalize forecast column names to expected keys if present
function Get-ForecastFields($row) {
    $f = @{}
    $cols = $row.PSObject.Properties.Name
    $f.EstimatedClicks = ($row | Select-Object -ExpandProperty ('Estimated Clicks' -as [string])  -ErrorAction SilentlyContinue) -or ($row.'EstimatedClicks' -ErrorAction SilentlyContinue) -or ($row.'Estimated_Clicks' -ErrorAction SilentlyContinue)
    $f.EstimatedImpressions = ($row | Select-Object -ExpandProperty ('Estimated Impressions' -as [string]) -ErrorAction SilentlyContinue) -or ($row.'EstimatedImpressions' -ErrorAction SilentlyContinue)
    $f.EstimatedCost = ($row | Select-Object -ExpandProperty ('Estimated Cost' -as [string]) -ErrorAction SilentlyContinue) -or ($row.'EstimatedCost' -ErrorAction SilentlyContinue)
    $f.EstimatedCTR = ($row | Select-Object -ExpandProperty ('Estimated CTR' -as [string]) -ErrorAction SilentlyContinue) -or ($row.'EstimatedCTR' -ErrorAction SilentlyContinue)
    $f.EstimatedAvgCPC = ($row | Select-Object -ExpandProperty ('Estimated Average CPC' -as [string]) -ErrorAction SilentlyContinue) -or ($row.'EstimatedAverageCPC' -ErrorAction SilentlyContinue)
    $f.ConversionRate = ($row | Select-Object -ExpandProperty ('Conversion Rate' -as [string]) -ErrorAction SilentlyContinue) -or ($row.'ConversionRate' -ErrorAction SilentlyContinue)
    $f.Conversions = ($row | Select-Object -ExpandProperty ('Conversions' -as [string]) -ErrorAction SilentlyContinue) -or ($row.'Conversions' -ErrorAction SilentlyContinue)
    $f.AverageCPA = ($row | Select-Object -ExpandProperty ('Average CPA' -as [string]) -ErrorAction SilentlyContinue) -or ($row.'AverageCPA' -ErrorAction SilentlyContinue)
    $f
}

# Build a simple index by keyword (exact match) for quick lookup
$forecastIndex = @{}
foreach ($row in $forecast) {
    # Forecast CSV might have a column named 'Keyword' or something similar
    $keywordCol = $null
    if ($row.PSObject.Properties.Name -contains 'Keyword') { $keywordCol = 'Keyword' }
    elseif ($row.PSObject.Properties.Name -contains 'Search term') { $keywordCol = 'Search term' }
    elseif ($row.PSObject.Properties.Name -contains 'Search Term') { $keywordCol = 'Search Term' }

    $k = $null
    if ($keywordCol) { $k = $row.$keywordCol }
    else {
        # try to find the most likely candidate property
        foreach ($p in $row.PSObject.Properties.Name) {
            if ($p -match 'keyword' -or $p -match 'Search') { $k = $row.$p; break }
        }
    }
    if (-not [string]::IsNullOrWhiteSpace($k)) {
        $keyNorm = $k.Trim()
        if (-not $forecastIndex.ContainsKey($keyNorm)) { $forecastIndex[$keyNorm] = @() }
        $forecastIndex[$keyNorm] += $row
    }
}

$merged = @()
$matched = 0
$unmatched = 0
foreach ($krow in $keywords) {
    $kw = $krow.keyword
    $found = $null
    if ($forecastIndex.ContainsKey($kw)) {
        $found = $forecastIndex[$kw][0]
    } else {
        # try a case-insensitive containment search in forecastIndex keys
        foreach ($fk in $forecastIndex.Keys) {
            if ($fk -and $kw -and ($fk.IndexOf($kw, [System.StringComparison]::InvariantCultureIgnoreCase) -ge 0 -or $kw.IndexOf($fk, [System.StringComparison]::InvariantCultureIgnoreCase) -ge 0)) {
                $found = $forecastIndex[$fk][0]
                break
            }
        }
    }

    $out = $krow.PSObject.Copy()
    if ($found) {
        $f = Get-ForecastFields $found
        $out | Add-Member -NotePropertyName 'EstimatedClicks' -NotePropertyValue $f.EstimatedClicks -Force
        $out | Add-Member -NotePropertyName 'EstimatedImpressions' -NotePropertyValue $f.EstimatedImpressions -Force
        $out | Add-Member -NotePropertyName 'EstimatedCost' -NotePropertyValue $f.EstimatedCost -Force
        $out | Add-Member -NotePropertyName 'EstimatedCTR' -NotePropertyValue $f.EstimatedCTR -Force
        $out | Add-Member -NotePropertyName 'EstimatedAvgCPC' -NotePropertyValue $f.EstimatedAvgCPC -Force
        $out | Add-Member -NotePropertyName 'ConversionRate' -NotePropertyValue $f.ConversionRate -Force
        $out | Add-Member -NotePropertyName 'Conversions' -NotePropertyValue $f.Conversions -Force
        $out | Add-Member -NotePropertyName 'AverageCPA' -NotePropertyValue $f.AverageCPA -Force
        $matched++
    } else {
        # add empty forecast fields
        $out | Add-Member -NotePropertyName 'EstimatedClicks' -NotePropertyValue '' -Force
        $out | Add-Member -NotePropertyName 'EstimatedImpressions' -NotePropertyValue '' -Force
        $out | Add-Member -NotePropertyName 'EstimatedCost' -NotePropertyValue '' -Force
        $out | Add-Member -NotePropertyName 'EstimatedCTR' -NotePropertyValue '' -Force
        $out | Add-Member -NotePropertyName 'EstimatedAvgCPC' -NotePropertyValue '' -Force
        $out | Add-Member -NotePropertyName 'ConversionRate' -NotePropertyValue '' -Force
        $out | Add-Member -NotePropertyName 'Conversions' -NotePropertyValue '' -Force
        $out | Add-Member -NotePropertyName 'AverageCPA' -NotePropertyValue '' -Force
        $unmatched++
    }
    $merged += $out
}

$merged | Export-Csv -Path $outputPath -NoTypeInformation -Encoding UTF8

Write-Host "Merge complete. Matched: $matched. Unmatched: $unmatched. Output: $outputPath"