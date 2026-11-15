# HUNTBAZAAR Invitation Registration

Invitation-only event registration platform for HUNTBAZAAR 2026. The Laravel backend lives in `backend/`.

## Project Overview

A Laravel-based web application for secure invitation-based event registration, attendee management, and automated email notifications.

## Technology Stack

- PHP 8.3–8.5 and Laravel 13
- PostgreSQL 18
- Blade
- jQuery
- VueJS
- Laravel Queue

## Project Status

Under development. The Laravel 13 backend foundation is in place; invitation-registration features have not started.

## Frontend Assets

The Laravel Vite plugin builds the CSS and JavaScript entries in `backend/resources/` for Blade's `@vite` directive. From `backend/`, install the locked dependencies:

```powershell
npm.cmd ci
```

For development with hot module replacement:

```powershell
npm.cmd run dev
```

For a production asset build:

```powershell
npm.cmd run build
```

The production build is written to `backend/public/build/`, which is generated output and is not committed.

## Documentation

The authoritative specification is `PRD_HUNTBAZAAR_Invitation_Registration_AI_Agent_v1.md`, maintained separately from this repository. Local working documentation under `docs/` and the push log in `history.md` are intentionally excluded from Git and will not be included in repository pushes.
