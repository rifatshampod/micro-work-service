# Controllers

This directory hosts the HTTP layer for the marketplace experience, including public browsing, authenticated authoring, and wallet interactions.

## Overview
- **HomeController** surfaces featured jobs and news tickers for the landing page.
- **jobsDetail / gigsController / contestController** expose CRUD-style flows for publishing and viewing jobs, gigs, and contests, plus accepting participant submissions.
- **careerController, paymentProofController, usersController, users, LogoutController, walletController** cover secondary flows such as career submissions, proof galleries, profile edits, authentication, and wallet transactions.
- **Auth/** contains Laravel UI-auth scaffolding hooks.

## Interaction Points
- Public routes in `routes/web.php` point to the listing and detail actions for jobs (`getData`, `getCategoryData`, `getSingleData`) and analogous gig/contest handlers.
- Authenticated routes enable creation (`addData`), campaign promotion (`addCampaignData`), proof submission (`submitProof`), and approvals (`approveJob`, `rejectJob`, `mistakeApproveJob`).
- Wallet endpoints (`depositData`, `withdrawData`) feed into user balance tracking before publishing new content.

## Notes on Custom Logic
- Controllers coordinate Eloquent models for totals (e.g., decrementing `due_availability` on approvals) and upload handling for proofs or gig images.
- Campaign promotion raises a job's `featured` weight while storing the purchase in `Campaign` records.
