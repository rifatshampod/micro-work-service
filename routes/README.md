# Routes

The `web.php` file defines public marketing pages, resource listings, and authenticated dashboards for the micro-work marketplace.

## Public Endpoints
- `/` shows featured jobs and news entries.
- `/jobs`, `/gigs`, `/contests` list entities with category filters (`*-category={id}`) and single-detail pages (`*-details={id}`).
- Informational pages include `/about`, `/terms-of-services`, `/privacy-policy`, `/support`, and `/career` submissions.

## Authenticated Endpoints
- Creation forms for jobs (`/add-job`), gigs (`/add-gig`), contests (`/add-contest`), and campaigns (`/add-campaign`).
- Submission flows: `/submit-proof` for job/contest entries and user review screens such as `/my-applied-jobs`.
- Wallet operations: `/my-wallet`, `/deposit-wallet`, `/withdraw-request`.
- Profile maintenance: `/profile`, `/edit-profile`, `/edit-password`.

## Behavior
Routes rely on Laravel's `auth` and `verified` middleware. Controller actions adjust availability and earnings upon approvals or campaign boosts while surfacing flash status messages to the views.
