<?php

namespace Secyt\Core\Proxies\__CG__\Secyt\Core\model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Proyecto extends \Secyt\Core\model\Proyecto implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'titulo', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'codigo', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'inicio', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'fin', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'tipo', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'linea', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'duracion', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'abstract', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'abstractEng', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'clave1', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'clave2', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'clave3', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'clave4', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'clave5', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'clave6', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'claveEng1', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'claveEng2', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'claveEng3', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'claveEng4', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'claveEng5', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'claveEng6', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'codigoSIGEVA', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'tipoAcreditacion', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'disciplina', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'especialidad', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'facultad', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'estado', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'campo', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'unidad', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'integrantes'];
        }

        return ['__isInitialized__', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'titulo', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'codigo', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'inicio', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'fin', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'tipo', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'linea', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'duracion', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'abstract', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'abstractEng', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'clave1', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'clave2', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'clave3', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'clave4', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'clave5', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'clave6', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'claveEng1', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'claveEng2', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'claveEng3', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'claveEng4', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'claveEng5', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'claveEng6', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'codigoSIGEVA', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'tipoAcreditacion', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'disciplina', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'especialidad', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'facultad', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'estado', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'campo', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'unidad', '' . "\0" . 'Secyt\\Core\\model\\Proyecto' . "\0" . 'integrantes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Proyecto $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitulo', []);

        return parent::getTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitulo($titulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitulo', [$titulo]);

        return parent::setTitulo($titulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigo', []);

        return parent::getCodigo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigo($codigo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigo', [$codigo]);

        return parent::setCodigo($codigo);
    }

    /**
     * {@inheritDoc}
     */
    public function getInicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInicio', []);

        return parent::getInicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setInicio($inicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInicio', [$inicio]);

        return parent::setInicio($inicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFin', []);

        return parent::getFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setFin($fin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFin', [$fin]);

        return parent::setFin($fin);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', []);

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipo($tipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo', [$tipo]);

        return parent::setTipo($tipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getLinea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLinea', []);

        return parent::getLinea();
    }

    /**
     * {@inheritDoc}
     */
    public function setLinea($linea)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLinea', [$linea]);

        return parent::setLinea($linea);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuracion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuracion', []);

        return parent::getDuracion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuracion($duracion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuracion', [$duracion]);

        return parent::setDuracion($duracion);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbstract()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbstract', []);

        return parent::getAbstract();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbstract($abstract)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbstract', [$abstract]);

        return parent::setAbstract($abstract);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbstractEng()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbstractEng', []);

        return parent::getAbstractEng();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbstractEng($abstractEng)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbstractEng', [$abstractEng]);

        return parent::setAbstractEng($abstractEng);
    }

    /**
     * {@inheritDoc}
     */
    public function getClave1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClave1', []);

        return parent::getClave1();
    }

    /**
     * {@inheritDoc}
     */
    public function setClave1($clave1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClave1', [$clave1]);

        return parent::setClave1($clave1);
    }

    /**
     * {@inheritDoc}
     */
    public function getClave2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClave2', []);

        return parent::getClave2();
    }

    /**
     * {@inheritDoc}
     */
    public function setClave2($clave2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClave2', [$clave2]);

        return parent::setClave2($clave2);
    }

    /**
     * {@inheritDoc}
     */
    public function getClave3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClave3', []);

        return parent::getClave3();
    }

    /**
     * {@inheritDoc}
     */
    public function setClave3($clave3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClave3', [$clave3]);

        return parent::setClave3($clave3);
    }

    /**
     * {@inheritDoc}
     */
    public function getClave4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClave4', []);

        return parent::getClave4();
    }

    /**
     * {@inheritDoc}
     */
    public function setClave4($clave4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClave4', [$clave4]);

        return parent::setClave4($clave4);
    }

    /**
     * {@inheritDoc}
     */
    public function getClave5()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClave5', []);

        return parent::getClave5();
    }

    /**
     * {@inheritDoc}
     */
    public function setClave5($clave5)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClave5', [$clave5]);

        return parent::setClave5($clave5);
    }

    /**
     * {@inheritDoc}
     */
    public function getClave6()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClave6', []);

        return parent::getClave6();
    }

    /**
     * {@inheritDoc}
     */
    public function setClave6($clave6)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClave6', [$clave6]);

        return parent::setClave6($clave6);
    }

    /**
     * {@inheritDoc}
     */
    public function getClaveEng1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClaveEng1', []);

        return parent::getClaveEng1();
    }

    /**
     * {@inheritDoc}
     */
    public function setClaveEng1($claveEng1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClaveEng1', [$claveEng1]);

        return parent::setClaveEng1($claveEng1);
    }

    /**
     * {@inheritDoc}
     */
    public function getClaveEng2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClaveEng2', []);

        return parent::getClaveEng2();
    }

    /**
     * {@inheritDoc}
     */
    public function setClaveEng2($claveEng2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClaveEng2', [$claveEng2]);

        return parent::setClaveEng2($claveEng2);
    }

    /**
     * {@inheritDoc}
     */
    public function getClaveEng3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClaveEng3', []);

        return parent::getClaveEng3();
    }

    /**
     * {@inheritDoc}
     */
    public function setClaveEng3($claveEng3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClaveEng3', [$claveEng3]);

        return parent::setClaveEng3($claveEng3);
    }

    /**
     * {@inheritDoc}
     */
    public function getClaveEng4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClaveEng4', []);

        return parent::getClaveEng4();
    }

    /**
     * {@inheritDoc}
     */
    public function setClaveEng4($claveEng4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClaveEng4', [$claveEng4]);

        return parent::setClaveEng4($claveEng4);
    }

    /**
     * {@inheritDoc}
     */
    public function getClaveEng5()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClaveEng5', []);

        return parent::getClaveEng5();
    }

    /**
     * {@inheritDoc}
     */
    public function setClaveEng5($claveEng5)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClaveEng5', [$claveEng5]);

        return parent::setClaveEng5($claveEng5);
    }

    /**
     * {@inheritDoc}
     */
    public function getClaveEng6()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClaveEng6', []);

        return parent::getClaveEng6();
    }

    /**
     * {@inheritDoc}
     */
    public function setClaveEng6($claveEng6)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClaveEng6', [$claveEng6]);

        return parent::setClaveEng6($claveEng6);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigoSIGEVA()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigoSIGEVA', []);

        return parent::getCodigoSIGEVA();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigoSIGEVA($codigoSIGEVA)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigoSIGEVA', [$codigoSIGEVA]);

        return parent::setCodigoSIGEVA($codigoSIGEVA);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoAcreditacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoAcreditacion', []);

        return parent::getTipoAcreditacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoAcreditacion($tipoAcreditacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoAcreditacion', [$tipoAcreditacion]);

        return parent::setTipoAcreditacion($tipoAcreditacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisciplina()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisciplina', []);

        return parent::getDisciplina();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisciplina($disciplina)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisciplina', [$disciplina]);

        return parent::setDisciplina($disciplina);
    }

    /**
     * {@inheritDoc}
     */
    public function getEspecialidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEspecialidad', []);

        return parent::getEspecialidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setEspecialidad($especialidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEspecialidad', [$especialidad]);

        return parent::setEspecialidad($especialidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacultad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacultad', []);

        return parent::getFacultad();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacultad($facultad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacultad', [$facultad]);

        return parent::setFacultad($facultad);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', []);

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', [$estado]);

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getCampo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCampo', []);

        return parent::getCampo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCampo($campo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCampo', [$campo]);

        return parent::setCampo($campo);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnidad', []);

        return parent::getUnidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnidad($unidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnidad', [$unidad]);

        return parent::setUnidad($unidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigoTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigoTitulo', []);

        return parent::getCodigoTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function getIntegrantes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntegrantes', []);

        return parent::getIntegrantes();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntegrantes($integrantes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntegrantes', [$integrantes]);

        return parent::setIntegrantes($integrantes);
    }

    /**
     * {@inheritDoc}
     */
    public function getDirector()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDirector', []);

        return parent::getDirector();
    }

    /**
     * {@inheritDoc}
     */
    public function getOid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getOid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOid', []);

        return parent::getOid();
    }

    /**
     * {@inheritDoc}
     */
    public function setOid($oid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOid', [$oid]);

        return parent::setOid($oid);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', []);

        return parent::getVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setVersion($version)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVersion', [$version]);

        return parent::setVersion($version);
    }

    /**
     * {@inheritDoc}
     */
    public function getEncrypted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEncrypted', []);

        return parent::getEncrypted();
    }

    /**
     * {@inheritDoc}
     */
    public function setEncrypted($encrypted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEncrypted', [$encrypted]);

        return parent::setEncrypted($encrypted);
    }

    /**
     * {@inheritDoc}
     */
    public function encrypt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'encrypt', []);

        return parent::encrypt();
    }

    /**
     * {@inheritDoc}
     */
    public function decrypt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'decrypt', []);

        return parent::decrypt();
    }

    /**
     * {@inheritDoc}
     */
    public function getManagedEntities()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getManagedEntities', []);

        return parent::getManagedEntities();
    }

}