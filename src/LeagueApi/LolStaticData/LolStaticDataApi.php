<?php


namespace LeagueApi\LolStaticData;


use GuzzleHttp\Client;
use JMS\Serializer\Serializer;
use LeagueApi\Api\Api;
use LeagueApi\Api\CacheableApi;
use LeagueApi\Classes\ListDto;
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
use LeagueApi\LolStaticData\Exceptions\CacheFileNotFoundException;

class LolStaticDataApi extends Api implements CacheableApi {

    private $cacheDirectory;

    public function __construct(Serializer $serializer, Client $client, $cacheDirectory)
    {
        parent::__construct($serializer, $client);

        if (!is_dir($cacheDirectory)) {
            throw new \InvalidArgumentException(sprintf('Invalid cache directory "%s"', $cacheDirectory));
        }

        $this->cacheDirectory = $cacheDirectory;
    }


    /**
     * @inheritDoc
     */
    protected function getData($url, array $query, $dataType)
    {
        $url = $this->client->getConfig('base_uri') . $url . '?';

        $queryKeyValuesString = [];
        foreach ($query as $name => $parameter) {
            $queryKeyValuesString[] = urlencode($name) . '=' . urlencode($parameter);
        }

        $url .= implode('&', $queryKeyValuesString);

        $filename = md5(base64_encode($url)) . '.serialized';

        try {
            return $this->read($filename);
        } catch (CacheFileNotFoundException $e) {
            $data = parent::getData($url, $query, $dataType);

            if ($data instanceof ListDto) {
                $this->save($filename, $data);
            }
        }

        return $data;
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

    public function save($filename, $data)
    {
        $result = file_put_contents(rtrim($this->cacheDirectory, '/') . '/' . $filename, serialize($data));

        if ($result === false) {
            throw new \LogicException(sprintf('Couldn\'t save file to cache. Filename "%s".', $filename));
        }
    }

    public function read($filename)
    {
        if (!file_exists(rtrim($this->cacheDirectory, '/') . '/' . $filename)) {
            throw new CacheFileNotFoundException();
        }
        
        $data = file_get_contents(rtrim($this->cacheDirectory, '/') . '/' . $filename);

        if ($data === false) {
            throw new \LogicException(sprintf('Couldn\'t read file from cache. Filename "%s".', $filename));
        }

        return unserialize($data);
    }
}