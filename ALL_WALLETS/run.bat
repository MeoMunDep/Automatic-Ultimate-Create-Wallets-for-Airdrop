@echo off
title Wallet Generator by MeoMunDep
cd /d %~dp0
echo.
echo =============================================
echo          Wallet Generator by MeoMunDep        
echo =============================================
echo.
echo Installing necessary modules...
npm install @aptos-labs/ts-sdk @hashgraph/sdk @mysten/sui @polkadot/keyring @polkadot/util-crypto @solana/web3.js @stablelib/ed25519 @ton/crypto algosdk bech32 bip32 bip39 bitcoinjs-lib blake2b blakejs bs58check cardano-wallet-js colors ed25519-hd-key ethers ethereumjs-util hdkey near-api-js ton ton-core ton-crypto tonweb tiny-secp256k1 tronweb secp256k1 xlsx --no-audit --prefer-offline --legacy-peer-deps --save-exact --force
echo.
echo Starting the bot...
node meomundep
pause
