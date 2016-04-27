<?php
/**
 * @author: simeon.kolev
 */

namespace LeagueApi\LolStaticData;


use LeagueApi\Api\Api;
use LeagueApi\LolStaticData\Classes\Champion\ChampionDto;
use LeagueApi\LolStaticData\Classes\Champion\ChampionListDto;
use LeagueApi\LolStaticData\Classes\Item\ItemDto;
use LeagueApi\LolStaticData\Classes\Item\ItemListDto;
use LeagueApi\LolStaticData\Classes\LanguageStrings\LanguageStringsDto;
use LeagueApi\LolStaticData\Classes\Map\MapListDto;
use LeagueApi\LolStaticData\Classes\Mastery\MasteryDto;
use LeagueApi\LolStaticData\Classes\Mastery\MasteryListDto;
use LeagueApi\LolStaticData\Classes\Realm\RealmDto;
use LeagueApi\LolStaticData\Classes\Rune\RuneDto;
use LeagueApi\LolStaticData\Classes\Rune\RuneListDto;
use LeagueApi\LolStaticData\Classes\SummonerSpell\SummonerSpellDto;
use LeagueApi\LolStaticData\Classes\SummonerSpell\SummonerSpellListDto;

class LolStaticDataApi extends Api {
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
            ChampionListDto::class
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
            'champion' . $id,
            ['champData' => $champData, 'locale' => $locale, 'version' => $version],
            ChampionDto::class
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
            ItemListDto::class
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
            'item' . $id,
            ['itemData' => $itemData, 'locale' => $locale, 'version' => $version],
            ItemDto::class
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
            LanguageStringsDto::class
        );
    }

    /**
     * @return array
     */
    public function getLanguages()
    {
        return $this->getData('languages', [], 'array<string>');
    }

    /**
     * @return MapListDto
     */
    public function getMaps()
    {
        return $this->getData('map', [], MapListDto::class);
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
            MasteryListDto::class
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
            'mastery/' . $id,
            ['masteryData' => $masteryData, 'locale' => $locale, 'version' => $version],
            MasteryDto::class
        );
    }

    /**
     * @return RealmDto
     */
    public function getRealm()
    {
        return $this->getData('realm', [], RealmDto::class);
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
            RuneListDto::class
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
        return $this->getData(
            'rune/' . $id,
            ['runeData' => $runeData, 'locale' => $locale, 'version' => $version],
            RuneDto::class
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
            SummonerSpellListDto::class
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
            'summoner-spell' . $id,
            ['spellData' => $spellData, 'locale' => $locale, 'version' => $version],
            SummonerSpellDto::class
        );
    }

    /**
     * @return array
     */
    public function getVersions()
    {
        return $this->getData('versions', [], 'array<string>');
    }
}