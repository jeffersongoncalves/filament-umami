# Changelog

All notable changes to this project will be documented in this file.

## 3.3.0 - 2026-06-23

Refactor onto filament-analytics-core base classes; drop redundant dependencies (provided transitively via the cores).

## v3.2.1 - 2026-03-04

### Breaking Changes

- **Minimum Filament version bumped to `^5.3`** — required due to the new `PageConfiguration` parameter added to `Page::routes()` in [filamentphp/filament#19225](https://github.com/filamentphp/filament/pull/19225)

### What's Changed

- Update `composer.json` to require `filament/filament: ^5.3`

## 3.2.1 - 2026-02-24

### What's Changed

- Add Laravel 13.x support, remove explicit laravel/framework constraint (orchestra/testbench ^11.0)

## v3.2.0 - 2026-02-22

### What's Changed

- **feat:** Add translatable navigation group support — the `$navigationGroup` now uses Laravel's translation system instead of a hardcoded string, allowing proper localization (en: "Settings", pt_BR: "Configurações")

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/compare/v3.1.1...v3.2.0

## v3.1.2 - 2026-02-22

### Fixed

- Added missing `spatie/laravel-settings` migration step to README installation guide

## v3.1.1 - 2026-02-22

### Fixed

- Add `columns(null)` to schema for full-width sections in Settings Page

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/compare/v3.1.0...v3.1.1

## v3.1.0 - 2026-02-22

### Added

- Settings Page for managing Umami analytics configuration via Filament panel
- UmamiPlugin class with configurable `settingsPage()` method
- Translation files (English and Brazilian Portuguese)
- Support for laravel-umami v2.0

### Settings Page Sections

- **Tracking Configuration** - Website ID, Analytics Host, Host URL
- **Tracking Behavior** - Auto Track, Exclude Search, Exclude Hash
- **Advanced Options** - Domains filter, Custom Tag

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/compare/v3.0.0...v3.1.0

## v3.0.0 - 2026-02-16

### What's Changed

* build(deps): bump aglipanci/laravel-pint-action from 2.5 to 2.6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-umami/pull/7
* build(deps): bump actions/checkout from 4 to 5 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-umami/pull/8
* build(deps): bump stefanzweifel/git-auto-commit-action from 6 to 7 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-umami/pull/9
* build(deps): bump dependabot/fetch-metadata from 2.4.0 to 2.5.0 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-umami/pull/13
* build(deps): bump actions/checkout from 5 to 6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-umami/pull/12

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/compare/v2.0.0...v3.0.0

## v2.0.0 - 2025-07-17

### What's Changed

* build(deps): bump dependabot/fetch-metadata from 2.3.0 to 2.4.0 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-umami/pull/1
* build(deps): bump stefanzweifel/git-auto-commit-action from 5 to 6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-umami/pull/2
* chore: Configure Renovate by @renovate[bot] in https://github.com/jeffersongoncalves/filament-umami/pull/3
* Delete .github/FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-umami/pull/5
* Delete renovate.json by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-umami/pull/6

### New Contributors

* @dependabot[bot] made their first contribution in https://github.com/jeffersongoncalves/filament-umami/pull/1
* @renovate[bot] made their first contribution in https://github.com/jeffersongoncalves/filament-umami/pull/3
* @jeffersongoncalves made their first contribution in https://github.com/jeffersongoncalves/filament-umami/pull/5

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/compare/v1.0.0...v2.0.0

## v1.0.4 - 2025-03-03

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/compare/v1.0.3...v1.0.4

## v1.0.3 - 2025-03-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/compare/v1.0.2...v1.0.3

## v1.0.2 - 2025-03-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/compare/v1.0.1...v1.0.2

## v1.0.1 - 2025-03-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/compare/v1.0.0...v1.0.1

## v1.0.0 - 2025-03-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/commits/v1.0.0
