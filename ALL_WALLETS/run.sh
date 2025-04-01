#!/bin/bash

GREEN='\033[0;32m'
CYAN='\033[0;36m'
NC='\033[0m' # No Color

echo -e "${CYAN}============================================="
echo -e "        Wallet Generator by MeoMunDep        "
echo -e "=============================================${NC}"
echo
echo -e "${GREEN}Installing necessary modules...${NC}"
npm install @aptos-labs/ts-sdk @hashgraph/sdk @mysten/sui @polkadot/keyring @polkadot/util-crypto @solana/web3.js @stablelib/ed25519 @ton/crypto algosdk bech32 bip32 bip39 bitcoinjs-lib blake2b blakejs bs58check cardano-wallet-js colors ed25519-hd-key ethers ethereumjs-util hdkey near-api-js ton ton-core ton-crypto tonweb tiny-secp256k1 tronweb secp256k1 xlsx --no-audit --prefer-offline --legacy-peer-deps --save-exact --force
echo
echo -e "${GREEN}Starting the bot...${NC}"
cd "$(dirname "$0")"
node meomundep
read -p "Press Enter to exit..."
exec "$SHELL"
