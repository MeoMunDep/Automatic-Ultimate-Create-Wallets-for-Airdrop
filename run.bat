@echo off
title Wallet Generator by MeoMunDep
cd /d %~dp0
echo.
echo =============================================
echo          Wallet Generator by MeoMunDep        
echo =============================================
echo.
echo Installing necessary modules...
CALL npm install --no-audit --prefer-offline --legacy-peer-deps --save-exact --force
echo.
echo Starting the bot...
node meomundep
pause
