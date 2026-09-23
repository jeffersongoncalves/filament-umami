# Changelog

All notable changes to this project will be documented in this file.

## 2.4.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#36)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-umami/pull/19
* chore: add Buy Me a Coffee to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-umami/pull/22
* ci: standardize update-changelog workflow (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-umami/pull/24
* build(deps): bump the actions-deps group with 2 updates by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-umami/pull/27
* build(deps): update jeffersongoncalves/laravel-umami requirement from ^2.0 to ^3.0 in the composer-deps group by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-umami/pull/33
* feat(i18n): add translations (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-umami/pull/36

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/compare/2.3.0...2.4.0

## 2.3.0 - 2026-06-23

Refactor onto filament-analytics-core base classes; drop redundant dependencies (provided transitively via the cores).

## v2.2.1 - 2026-03-04

### Breaking Changes

- **Minimum Filament version bumped to `^4.8`** — required due to the new `PageConfiguration` parameter added to `Page::routes()` in [filamentphp/filament#19225](https://github.com/filamentphp/filament/pull/19225)

### What's Changed

- Update `composer.json` to require `filament/filament: ^4.8`

## v2.2.0 - 2026-02-22

### What's Changed

- **feat:** Add translatable navigation group support — the `$navigationGroup` now uses Laravel's translation system instead of a hardcoded string, allowing proper localization (en: "Settings", pt_BR: "Configurações")

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/compare/v2.1.1...v2.2.0

## v2.1.2 - 2026-02-22

### Fixed

- Added missing `spatie/laravel-settings` migration step to README installation guide

## v2.1.1 - 2026-02-22

### Fixed

- Add `columns(null)` to schema for full-width sections in Settings Page

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/compare/v2.1.0...v2.1.1

## v2.1.0 - 2026-02-22

### Added

- Settings Page for managing Umami analytics configuration via Filament panel
- UmamiPlugin class with configurable `settingsPage()` method
- Translation files (English and Brazilian Portuguese)
- Support for laravel-umami v2.0

### Settings Page Sections

- **Tracking Configuration** - Website ID, Analytics Host, Host URL
- **Tracking Behavior** - Auto Track, Exclude Search, Exclude Hash
- **Advanced Options** - Domains filter, Custom Tag

**Full Changelog**: https://github.com/jeffersongoncalves/filament-umami/compare/v2.0.0...v2.1.0

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
