# Lol Static Data Api
##1. Instantiate API
    $lolStaticData = new LolStaticDataApi(<apiKey>);
##2. Champion
### Champion list
    $championList = $lolStaticData->getChampions(<ChampData::constant>, <dataById>);
### Champion
    $champion = $lolStaticData->getChampion(<id>, <ChampData::constant>);
##3. Item
### Item list
    $itemList = $lolStaticData->getItems(<ItemData::constant>);
### Item
    $item = $lolStaticData->getItem(<id>, <ItemData::constant>);
##4. Language strings
    $languageStrings = $lolStaticData->getLanguageStrings();
##5. Languages
    $languages = $lolStaticData->getLanguages();
##6. Map
    $maps = $lolStaticData->getMaps();
##7. Mastery
### Mastery list
    $masteryList = $lolStaticData->getMasteries(<MasteryData::constant>));
### Mastery
    $mastery = $lolStaticData->getMastery(<id>, <MasteryData::constant>));
##8. Realm
    $realm = $lolStaticData->getRealm();
##9. Rune
### Rune list
    $runes = $lolStaticData->getRunes(<RuneData::constant>);
### Rune
    $rune = $lolStaticData->getRune(<id>, <RuneData::constant>);
##10. Summoner spell
### Summoner spell list
    $summonerSpellList = $lolStaticData->getSummonerSpells(<SpellData::constant>);
### Summoner spell
    $summonerSpell = $lolStaticData->getSummonerSpell(<id>, <SpellData::constant>);
##11. Versions
    $versions = $lolStaticData->getVersions();