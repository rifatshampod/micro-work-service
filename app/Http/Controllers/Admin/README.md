# Admin Controllers

Backpack CRUD controllers provide admin-facing maintenance screens for marketplace catalogs, finance, and submissions.

## Key Controllers
- **JobCrudController, GigCrudController, ContestCrudController**: Manage listings, descriptions, pricing, and featured status.
- **CategoryCrudController**: Maintain shared taxonomies across jobs, gigs, and contests.
- **CampaignCrudController, ChargeCrudController**: Configure promotional tiers and pricing applied when boosting jobs or posting gigs.
- **DepositCrudController, WithdrawCrudController**: Review and resolve wallet funding/withdrawal requests.
- **SubmittedProofCrudController**: Audit participant submissions before approval.
- **ContactCrudController, CareerCrudController, NewsScrollCrudController, UserCrudController**: Curate auxiliary site content and user records.

## Usage
Each controller wires a model with Backpack's `List`, `Create`, `Update`, `Delete`, and optional `Show` operations. Field definitions leverage Summernote for rich text and hide computed finance fields where needed.
