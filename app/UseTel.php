<?php

namespace AloneFrame\tel;

class UseTel {
    use \AloneFrame\tel\tel\Common;

    //语言包
    public array|string $language = [];
    //选择语言
    public string|array $lang = '';
    //配置列表
    public array $config = [];
    //选择 conf
    public string|int $key = '';

    /**
     * 传入配置
     * @param array $config
     */
    public function __construct(array $config) {
        $this->config = $config;
    }

    /**
     * 设置语言包
     * @param array|string $language string为路径,可以目录和文件,第一目录为语言名称
     * @return $this
     */
    public function setLanguage(array|string $language): static {
        $this->language = $language;
        return $this;
    }

    /**
     * 设置使用语言
     * @param array|string $lang
     * @return $this
     */
    public function setLang(array|string $lang): static {
        $this->lang = $lang;
        return $this;
    }

    /**
     * 启动并设置使用配置
     * @param string|int $key 设置config配置key
     * @return $this
     */
    public function start(string|int $key): static {
        $this->key = $key;
        return $this;
    }
}