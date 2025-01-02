#!/bin/bash
git add .
git commit -m "1"
git remote set-url test git@github.com:ReijiAkkerman/test.git
git push test test
