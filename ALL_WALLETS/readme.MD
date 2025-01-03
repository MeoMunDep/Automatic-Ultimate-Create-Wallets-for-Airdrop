📞 Contact

> [Termux guides if you run on mobile](https://github.com/MeoMunDep/Guides-for-using-my-script-on-termux.)

> If you encounter any issues or have questions, feel free to reach out:

- Contact: [Link](t.me/MeoMunDep)
- Group: [Link](t.me/KeoAirDropFreeNe)
- Channel: [Link](t.me/KeoAirDropFreeNee)

## 🚀 Getting Started

To get started with the bot, follow these steps:

0. **Dowload NodeJS to run the bot**

> Remember to download Nodejs version: **22.11.0** and NPM version: **10.9.0**

-> [Link](https://t.me/KeoAirDropFreeNe/257/1462)

1. **Install Dependencies and Modules:**

     ```bash
   npm i --force colors crypto ethers tronweb @solana/web3.js @polkadot/keyring algosdk aptos @mysten/sui.js near-api-js @hashgraph/sdk xlsx bs58 ed25519-hd-key bip39 bip32 tweetnacl @cosmjs/stargate @cosmjs/crypto @cosmjs/launchpad @cosmjs/proto-signing secp256k1 blake2b tiny-secp256k1 secp256k1 bitcoinjs-lib ton-core @ton/crypto ton tonweb
   ```

2. **Prepare Configuration Files:**

   > You'll need to set up a few configuration files for the bot to work properly.

## 📁 Configuration Files

### 1. `configs.json` 📜 - Adjust configuration - `Count` is how many wallets do you want to create.

```json
{
  "wallets": {
    "EVM": {
      "count": 5,
      "networks": [
        "Ethereum",
        "BSC",
        "Polygon",
        "Avalanche",
        "Arbitrum",
        "Optimism",
        "Base",
        "zkSync",
        "Cronos",
        "Celo",
        "Fantom",
        "Harmony",
        "Moonbeam",
        "Moonriver",
        "OKC",
        "Gnosis",
        "Klaytn",
        "IoTeX",
        "Metis",
        "Linea",
        "Scroll"
      ]
    },
    "Bitcoin": { "count": 100 },
    "Cosmos": {
      "count": 5,
      "networks": [
        "Cosmos Hub",
        "Osmosis",
        "Kava",
        "Secret Network",
        "Akash",
        "Juno",
        "Evmos",
        "Persistence",
        "Injective",
        "Stride",
        "Crescent",
        "Stargaze",
        "Comdex",
        "Umee"
      ]
    },
    "Polkadot": {
      "count": 5,
      "networks": [
        "Polkadot",
        "Kusama",
        "Acala",
        "Astar",
        "Moonbeam",
        "Parallel",
        "Bifrost",
        "Centrifuge",
        "HydraDX",
        "Interlay",
        "Phala"
      ]
    },
    "Solana": {
      "count": 5
    },
    "NEAR": {
      "count": 5
    },
    "TRON": {
      "count": 5
    },
    "TON": {
      "count": 5
    },
    "Aptos": {
      "count": 5
    },
    "SUI": {
      "count": 5
    },
    "Cardano": {
      "count": 5
    },
    "Algorand": {
      "count": 5
    },
    "Hedera": {
      "count": 5
    }
  }
}
```

💡 Usage:

> You need to `cd` to the file after extract it
> To run the bot, use the following command: `cd "all_wallets-main/all_wallet"; node bot`

🎇Enjoy!
