How to merge Google Ads forecast CSV with project keywords

1. Export your Google Ads forecast or Keyword Planner CSV and save it as `docs/forecast.csv` in the repository root.
2. Make sure `docs/keywords_ar.csv` exists (I already generated one).
3. From the repository root run in PowerShell (Windows):

   powershell -ExecutionPolicy Bypass -File .\scripts\merge_forecast.ps1

4. The script will create `docs/keywords_with_forecast.csv` with forecast columns appended.

Notes and tips
- The script matches keywords by exact text first. If it finds no exact match it will try a case-insensitive containment match.
- If your forecast CSV uses Arabic punctuation or different keyword formatting, consider normalizing both files (remove trailing spaces, convert full-width characters) before merging.
- If you prefer, you can upload your forecast CSV here and I will run the merge for you and return the merged file.
