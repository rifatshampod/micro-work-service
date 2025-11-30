# Views

Blade templates power the public site, dashboards, and Backpack integration. Layouts under `layouts/` define shared chrome, while individual pages map to controllers in `app/Http/Controllers`.

## Highlights
- **home.blade.php**: Landing page showing featured jobs and news ticker content.
- **allJob.blade.php / singleJob.blade.php**: List and detail pages for micro-jobs with submission slots and proof review sections.
- **allGig.blade.php / singleGig.blade.php**: Marketplace browsing for gig storefronts with creator profiles and rating display.
- **allContests.blade.php / singleContest.blade.php**: Contest listings and detail views paralleling job flows.
- **createJob.blade.php, createGig1.blade.php, createContest*.blade.php**: Authenticated forms for publishing content and uploading media.
- **wallet.blade.php, rechargeWallet.blade.php, withdrawWallet.blade.php**: Wallet dashboards showing balances, deposits, and withdrawal requests.
- **usernav/**: User-specific navigation components and views for managing owned jobs, gigs, campaigns, and submissions.

## Usage
Templates consume data injected by controllers (e.g., `joblist`, `categorylist`, `balance`) and display session flash messages for creation, approval, or transaction events. File upload inputs mirror controller expectations for proof images and gig thumbnails.
