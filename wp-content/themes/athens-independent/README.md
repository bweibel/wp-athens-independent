
# Athens Independent — WordPress Block Theme

**Locally owned, community-driven news.** Athens Independent is a custom WordPress block theme built for Athens County Independent, an independent local news organization serving Athens County, Ohio.

## Quick Start

### Requirements
- WordPress 6.0 or later
- PHP 7.2 or later

## Installation

This is a custom theme for Athens Independent and is not distributed publicly. It is deployed via GitHub Actions to the production server on Hostinger.

1. In your WordPress admin, go to **Appearance → Themes → Add New**
2. Click **Upload Theme** and select the `athens-independent.zip` file
3. Click **Install** and then **Activate**
4. Start designing in **Appearance → Editor**

## Theme Features

### Full Site Editing

Built on WordPress's native Full Site Editing (FSE) framework:

- Edit headers, footers, and templates in **Appearance → Editor**
- Customize global styles (colors, typography, spacing)
- Build pages with block patterns

### Pattern Library

Pre-designed sections organized into categories:

- **Headers & Footers**: Light and dark variations
- **Hero Sections**: Multiple styles with editorial calls-to-action
- **Content Cards**: Testimonials, team members, article previews
- **Feature Sections**: Service boxes, icon grids
- **Blog Components**: Post grids, author boxes, comment sections

### Brand Colors

Configured in `theme.json` per the ACI brand guide:

| Name | Slug | Hex |
|------|------|-----|
| Brand (Pink) | `primary` | `#F48EAA` |
| Brand Accent | `primary-accent` | `#6bcfe2` |
| Brand Alt (Yellow-Green) | `primary-alt` | `#E6EA9B` |
| Brand Alt Accent | `primary-alt-accent` | `#9CC46E` |
| Brand Tertiary (Purple) | `brand-tertiary` | `#9691cf` |
| Contrast (Near-Black) | `main` | `#231F20` |
| Contrast Accent | `main-accent` | `#d4d4d4` |
| Base (White) | `base` | `#ffffff` |
| Base Accent | `secondary` | `#5c5a5a` |
| Tint (Off-White) | `tertiary` | `#F4F4F4` |
| Border Light | `border-light` | `#e0e0e0` |
| Border Dark | `border-dark` | `#4a4a4a` |

### Typography

- **Primary Font**: Kumbh Sans (Regular, Medium, Bold, Black)
- Available from [Google Fonts](https://fonts.google.com/specimen/Kumbh+Sans)
- Font file: `assets/fonts/kumbh-sans/KumbhSans-VariableFont_YOPQ,wght.ttf`

## For Developers

### Project Structure

```
athens-independent/
├── patterns/          # Block patterns
├── parts/            # Template parts (headers, footers)
├── templates/        # Page templates
├── styles/           # Style variations and presets
│   ├── blocks/       # Block-specific styles
│   ├── colors/       # Color palette variations
│   └── typography/   # Typography presets
├── theme.json        # Global styles and settings
└── functions.php     # Theme setup and configuration
```

### Coding Standards

- PHP: WordPress Coding Standards (WPCS)
- Function prefix: `athensindie_`
- Escape all output: `esc_html()`, `esc_attr()`, `esc_url()`, `wp_kses_post()`
- Nonce all forms and AJAX requests
- No direct DB queries unless `$wpdb` is unavoidable; use WP APIs first

### Build Tools

```bash
# Watch for pattern changes and auto-escape for translations
npm run dev

# Prepare patterns for translation
npm run translate:patterns
```

### Code Quality

```bash
# Check PHP syntax
composer run lint

# Scan for WordPress coding standards
composer run wpcs:scan

# Auto-fix coding standard issues
composer run wpcs:fix
```

## Deployment

Deployment is handled via GitHub Actions:

- **`develop` branch** — deploys to staging/demo via SFTP (Hostinger)
- **`main` branch** — creates a versioned `athens-independent.zip` release

SFTP credentials are stored as GitHub repository secrets:
`FTP_USERNAME`, `FTP_SERVER`, `FTP_PORT`, `FTP_PATH`, `FTP_PASSWORD`

## Git Workflow

- `main` = production
- `develop` = staging / integration branch
- Feature branches: `feature/[description]`
- Hotfix branches: `hotfix/[description]`
- Commit style: conventional commits (`feat:`, `fix:`, `chore:`, etc.)

## Working with Full Site Editing

### Site Editor

Access the visual site builder at **Appearance → Editor** to:

- Edit headers, footers, and templates
- Customize global styles
- Create custom templates
- Build with patterns

### Creating Pages with Patterns

1. Create a new page
2. Insert a full-page pattern from the pattern library
3. Apply the "No Title" template for full-width layouts
4. Customize content and publish

### Global Styles

Powered by `theme.json`, customize:

- Color palettes
- Typography scales
- Spacing and layout
- Block defaults

### Exporting Your Design

Share your customizations by exporting from the Site Editor:
**Options menu → Tools → Export**

## License

Athens Independent theme is licensed under the [GPL-3.0 license](https://www.gnu.org/licenses/gpl-3.0.html).

## About

Athens Independent theme is developed and maintained by [Ben Weibel](https://github.com/bweibel) for [Athens County Independent](https://athensindependent.com).

> Locally owned, community-driven news.
