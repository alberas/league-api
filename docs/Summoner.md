# Summoner Api
## Instantiate
    $summonerApi = new SummonerApi(<apiKey>);
## Summoners by name
    $summonerApi->getSummonerByName(<summonerName>));
    $summonerApi->getSummonersByName(array<summonerNames>);
## Summoners by id
    $summonerApi->getSummonerById(<summonerId>));
    $summonerApi->getSummonersById(array<summonerIds>);
## Summoner names by id
    $summonerApi->getNames(array<summonerIds>);
## Summoner masteries
    $summonerApi->getMasteries(array<summonerIds>);
## Summoner runes
    $summonerApi->getRunes(array<summonerIds>);