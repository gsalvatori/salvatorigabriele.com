---
layout: post
title:  "Download subtitles from subscene.com"
date:   2014-03-16 16:20:00
categories: projects
---

Few days ago I needed to download subtitles for some movies on my Raspberry Pi, so i decided to make a command-line Python script to extract them with a simple search on terminal. Code is pretty simple: it crawls the <a href="http://www.subscene.com">subscene.com</a> HTML page to search the corresponding title and basically asks you if you're looking for a film or a TV-series. For the latter case, it will also ask you the season in relation to the tv-series you've chosen, downloading subsequently the zip file with subs.

Usage (from command-line) :

```bash
python stpy.py -q "query" -l "language"
```

```bash
python stpy.py -q the-wolf-of-wall-street -l italian
```

You can find the entire project on <a href="https://raw.github.com/gsalvatori/stpy/"<b>Github</b></a>

