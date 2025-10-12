Arabic Keyword List — methodology and next steps

What this file contains
- `keywords_ar.csv` — a heuristic-prioritized list of Arabic keywords mapped to likely pages in the site. Each row contains: keyword, target page, intent, priority (1=high, 2=medium, 3=low), notes.

How keywords were generated
- Seeds were extracted from `public/sitemap.xml`, Blade templates (page titles, H1/H2), and common domain terms found across the repository (e.g., استقدام, عمالة منزلية, تأشيرة, تتبع الطلب).
- Seeds were expanded with modifiers: location names (الرياض, جدة, مكة), service modifiers (تأشيرة, سائق, نقل), commercial modifiers (اسعار, افضل, معتمد), and intent words (توظيف, تسجيل, تتبع).
- Priorities are heuristic: 1 = high commercial intent and clear page mapping; 2 = medium intent, useful secondary; 3 = informational or long-tail with lower priority.

How to validate volumes and competition (recommended tools)
- Google Search Console: view actual queries and impressions for your site — the best starting point.
- Google Keyword Planner (requires Google Ads account) — get search volume and CPC.
- Ahrefs / SEMrush / Moz: paid tools that give volume, KD (keyword difficulty), and SERP analysis.
- Free alternatives: Google Trends, Keyword Surfer (Chrome extension), AnswerThePublic, Ubersuggest (limited free tier).

Suggested validation workflow
1. Upload `sitemap.xml` (or keep it dynamic) and submit to Google Search Console.
2. In GSC, check "Performance" for top queries, pages, CTR and average position.
3. For top candidate keywords from `keywords_ar.csv`, run them through Keyword Planner or Ahrefs to get monthly volume and difficulty.
4. Re-rank keywords by a mix of intent and achievable difficulty (for quick wins, prefer long-tail transactional queries).

Next steps I can take for you
- Validate the CSV against Google Keyword Planner / Ahrefs (requires access or exported CSV from those tools).
- Map the top 30 keywords into finalized meta title & description templates for the corresponding Blade views.
- Implement a dynamic sitemap generator so your sitemap always lists latest worker profiles and pages.
- Add tracking (GSC + GA4) guidance and initial dashboards for keyword performance.

Which next step would you like me to take now?
- "Validate" (I will expect exported data from Keyword Planner / Ahrefs or give instructions for you)
- "Meta templates" (I will produce ready title/meta text for the top 30 pages)
- "Sitemap" (I will scaffold a Laravel sitemap generator + simple test)
- "Track" (I will prepare GSC/GA4 tracking and event suggestions)
