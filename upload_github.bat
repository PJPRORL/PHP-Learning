@echo off
echo Committing and uploading changes to GitHub...
cd /d "%~dp0"

:: Check if git is initialized
if not exist .git (
    echo Error: Git is not initialized in this directory.
    pause
    exit /b
)

:: Add all changes
git add .

:: Commit with timestamp
set "timestamp=%date% %time%"
git commit -m "Auto-save: %timestamp%"

:: Push to main branch
git push -u origin main

echo.
echo Process complete.
pause
