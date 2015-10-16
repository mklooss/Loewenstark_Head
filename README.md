Loewenstark_Head
============================================================

Add version tag to JS/CSS files in HTML header.

Before:
```javascript
<link rel="stylesheet" type="text/css" href="https://www.demo.de/js/example.css" />
```

After:
```javascript
<link rel="stylesheet" type="text/css" href="https://www.demo.de/js/example.css?v2" />
```

# Raise Version Tag
**Optimal:** Use a setup script in your project module. (Path: design/head/meta_version_tag)  
**Manually:** Backend > System > Configuration > Design > HTML Head > "Version Tag for JS/CSS Files in Header"

# Not Work?
Check rewrites for `page/html_head`