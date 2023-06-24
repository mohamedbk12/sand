<?php

namespace Meddev\SandSitepackage\Domain\Model;

/**
 * An extended frontend user with more attributes
 */
class FrontendUser extends \Evoweb\SfRegister\Domain\Model\FrontendUser {

    /**
     * @var string
     */
    protected string $praxisname = '';
    /**
     *  Setter Praxisname
     *
     * @param string $praxisname
     * @return void
     */
    public function setPraxisname($praxisname) {
        $this->praxisname = $praxisname;
    }

    /**
     * Getter praxisname
     *
     * @return string
     */
    public function getPraxisname() {
        return $this->praxisname;
    }
}
