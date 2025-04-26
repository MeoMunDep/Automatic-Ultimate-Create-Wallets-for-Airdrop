#!/bin/bash

GREEN='\033[0;32m'
CYAN='\033[0;36m'
NC='\033[0m' 

echo -e "${CYAN}============================================="
echo -e "        Wallet Generator by MeoMunDep        "
echo -e "=============================================${NC}"
echo
echo -e "${GREEN}Installing necessary modules...${NC}"
npm install --no-audit --prefer-offline --legacy-peer-deps --save-exact --force
echo
echo -e "${GREEN}Starting the bot...${NC}"
cd "$(dirname "$0")"
node meomundep
read -p "Press Enter to exit..."
exec "$SHELL"
