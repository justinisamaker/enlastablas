# Adobo WordPress Theme

This is a custom theme developed for En las Tablas Performing Arts, an arts non-profit located in Chicago, IL.

### Working with SCSS in this Repo

All changes to styles should be made in the SCSS folder. The CSS folder is procedurally generated and any changes made there will likely be overwritten.

If you're running this on a fresh install, run `npm run build-css` to get the initial CSS files. After that you can just run `npm run scss` whenever you're writing scss to watch the files. You'll need to restart the server if you introduce a new file, and your mileage may vary on if the server recognizes a change and refreshes if you change something in an included scss file, which are denoted by the underscore in front of the file name (e.g. `_colors.scss`).
