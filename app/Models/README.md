# Models

Eloquent models represent the marketplace domain: jobs, gigs, contests, campaigns, and supporting financial records.

## Core Entities
- **Job**: Task postings with availability, pricing, and featured weighting for campaigns.
- **Gig**: Service-style offerings with descriptions, specialities, and media attachments.
- **Contest**: Competition-style tasks paralleling jobs but separated by category and submissions.
- **Category**: Shared taxonomy for filtering across listings.

## Finance & Proofing
- **Campaign**: Tracks job promotions and their priority levels.
- **Charge**: Stores pricing configuration for postings and promotions.
- **Deposit / Withdraw**: Wallet inflow and outflow records tied to users.
- **Submitted_proof / Proof**: Participant submissions for approval; interacts with jobs and contests to adjust availability and earnings.
- **Rating**: Captures gig reviews.

## User Data
- **User** and **Usertable** provide authentication and profile attributes, including balances and country metadata.
- **Contact, Career, NewsScroll** capture contact forms, career applications, and homepage news ticker content.
