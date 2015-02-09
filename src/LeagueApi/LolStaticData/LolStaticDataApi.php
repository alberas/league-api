<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\LolStaticData;


use GuzzleHttp\Client;
use LeagueApi\LolStaticData\Classes\Champion\ChampionListDto;
use LeagueApi\LolStaticData\Classes\Item\ItemDto;
use LeagueApi\LolStaticData\Classes\Item\ItemListDto;
use LeagueApi\LolStaticData\Classes\LanguageStrings\LanguageStringsDto;
use LeagueApi\LolStaticData\Classes\Map\MapListDto;
use LeagueApi\LolStaticData\Classes\Mastery\MasteryDto;
use LeagueApi\LolStaticData\Classes\Mastery\MasteryListDto;
use LeagueApi\LolStaticData\Classes\Realm\RealmDto;
use LeagueApi\LolStaticData\Classes\Rune\RuneListDto;
use LeagueApi\LolStaticData\Classes\SummonerSpell\SummonerSpellDto;
use LeagueApi\LolStaticData\Classes\SummonerSpell\SummonerSpellListDto;
use LeagueApi\RegionApi;

class LolStaticDataApi extends RegionApi {
    /**
     * @var string $classesNamespace
     */
    private $classesNamespace;

    /**
     * @var string $version
     */
    private $version = 'v1.2';

    public function __construct()
    {
        $this->classesNamespace = __NAMESPACE__ . '\\Classes\\';
    }

    protected function createClient()
    {
        return new Client(
            [
                'base_url' => ['http://{region}.api.pvp.net/api/lol/static-data/{region}/{version}/', ['region' => $this->region, 'version' => $this->version]],
                'defaults' => ['query' => ['api_key' => $this->apiKey]]
            ]
        );
    }

    /**
     * @param string $champData
     * @param string $dataById
     * @param string $version
     * @param string $locale
     * @return ChampionListDto
     */
    public function getChampions($champData = '', $dataById = '', $version = '', $locale = '')
    {
        return $this->getData(
            'champion',
            ['champData' => $champData, 'dataById' => $dataById, 'locale' => $locale, 'version' => $version],
            $this->classesNamespace . 'Champion\\ChampionListDto'
        );
    }

    /**
     * @param $id
     * @param string $champData
     * @param string $version
     * @param string $locale
     * @return ChampionListDto
     */
    public function getChampion($id, $champData = '', $version = '', $locale = '')
    {
        return $this->getData(
            ['champion/{id}', ['id' => $id]],
            ['champData' => $champData, 'locale' => $locale, 'version' => $version],
            $this->classesNamespace . 'Champion\\ChampionDto'
        );
    }

    /**
     * @param string $itemListData
     * @param string $locale
     * @param string $version
     * @return ItemListDto
     */
    public function getItems($itemListData = '', $locale = '', $version = '')
    {
        return $this->getData(
            'item',
            ['itemListData' => $itemListData, 'locale' => $locale, 'version' => $version],
            $this->classesNamespace . 'Item\\ItemListDto'
        );
    }

    /**
     * @param $id
     * @param string $itemData
     * @param string $locale
     * @param string $version
     * @return ItemDto
     */
    public function getItem($id, $itemData = '', $locale = '', $version = '')
    {
        return $this->getData(
            ['item/{id}', ['id' => $id]],
            ['itemData' => $itemData, 'locale' => $locale, 'version' => $version],
            $this->classesNamespace . 'Item\\ItemDto'
        );
    }

    /**
     * @param string $locale
     * @param string $version
     * @return LanguageStringsDto
     */
    public function getLanguageStrings($locale = '', $version = '')
    {
        return $this->getData(
            'language-strings',
            ['locale' => $locale, 'version' => $version],
            $this->classesNamespace . 'LanguageStrings\\LanguageStringsDto'
        );
    }

    /**
     * @return array
     */
    public function getLanguages()
    {
        return $this->getData('languages', array(), 'array<string>');
    }

    /**
     * @return MapListDto
     */
    public function getMaps()
    {
        return $this->getData('map', array(), $this->classesNamespace . 'Map\\MapListDto');
    }

    /**
     * @param string $masteryListData
     * @param string $locale
     * @param string $version
     * @return MasteryListDto
     */
    public function getMasteries($masteryListData = '', $locale = '', $version = '')
    {
        return $this->getData(
            'mastery',
            ['masteryListData' => $masteryListData, 'locale' => $locale, 'version' => $version],
            $this->classesNamespace . 'Mastery\\MasteryListDto'
        );
    }

    /**
     * @param $id
     * @param string $masteryData
     * @param string $locale
     * @param string $version
     * @return MasteryDto
     */
    public function getMastery($id, $masteryData = '', $locale = '', $version = '')
    {
        return $this->getData(
            ['mastery/{id}', ['id' => $id]],
            ['masteryData' => $masteryData, 'locale' => $locale, 'version' => $version],
            $this->classesNamespace . 'Mastery\\MasteryDto'
        );
    }

    /**
     * @return RealmDto
     */
    public function getRealm()
    {
        return $this->getData('realm', array(), $this->classesNamespace . 'Realm\\RealmDto');
    }

    /**
     * @param string $runeListData
     * @param string $locale
     * @param string $version
     * @return RuneListDto
     */
    public function getRunes($runeListData = '', $locale = '', $version = '')
    {
        return $this->getData(
            'rune',
            ['runeListData' => $runeListData, 'locale' => $locale, 'version' => $version],
            $this->classesNamespace . 'Rune\\RuneListDto'
        );
    }

    /**
     * @param $id
     * @param string $runeData
     * @param string $locale
     * @param string $version
     * @return RuneListDto
     */
    public function getRune($id, $runeData = '', $locale = '', $version = '')
    {
        return $this->getData(['rune/{id}', ['id' => $id]],
            ['runeData' => $runeData, 'locale' => $locale, 'version' => $version],
            $this->classesNamespace . 'Rune\\RuneDto'
        );
    }

    /**
     * @param string $spellData
     * @param string $locale
     * @param string $version
     * @return SummonerSpellListDto
     */
    public function getSummonerSpells($spellData = '', $locale = '', $version = '')
    {
        return $this->getData(
            'summoner-spell',
            ['spellData' => $spellData, 'locale' => $locale, 'version' => $version],
            $this->classesNamespace . 'SummonerSpell\\SummonerSpellListDto'
        );
    }

    /**
     * @param $id
     * @param string $spellData
     * @param string $locale
     * @param string $version
     * @return SummonerSpellDto
     */
    public function getSummonerSpell($id, $spellData = '', $locale = '', $version = '')
    {
        return $this->getData(
            ['summoner-spell/{id}', ['id' => $id]],
            ['spellData' => $spellData, 'locale' => $locale, 'version' => $version],
            $this->classesNamespace . 'SummonerSpell\\SummonerSpellDto'
        );
    }

    /**
     * @return array
     */
    public function getVersions()
    {
        return $this->getData('versions', array(), 'array<string>');
    }
}