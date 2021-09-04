<?php
namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;

use Cose\Security\model\User;
/**
 * Integrante Estado
 *
 * @Entity @Table(name="secyt_integrante_estado", indexes={@Index(name="FK_secyt_integrante_estado_secyt_integrante", columns={"integrante_oid"}), @Index(name="FK_secyt_integrante_estado_secyt_categoria", columns={"categoria_oid"}), @Index(name="FK_secyt_integrante_estado_secyt_carrerainv", columns={"carrerainv_oid"}), @Index(name="FK_secyt_integrante_estado_secyt_organismo", columns={"organismo_oid"}), @Index(name="FK_secyt_integrante_estado_secyt_facultad", columns={"facultad_oid"}), @Index(name="FK_secyt_integrante_estado_secyt_cargo", columns={"cargo_oid"}), @Index(name="FK_secyt_integrante_estado_secyt_deddoc", columns={"deddoc_oid"}), @Index(name="FK_secyt_integrante_estado_secyt_tipo", columns={"tipo_oid"}), @Index(name="FK_secyt_integrante_estado_secyt_estado", columns={"estado_oid"})})
 */
class IntegranteEstado extends Entity{
   

   

    /**
     * @var int
     *
     * @Column(name="horasinv", type="integer", nullable=true)
     */
    private $horasinv;

   /**
     * @var \DateTime|null
     *
     * @Column(name="dt_cargo", type="date", nullable=true)
     */
    private $dtCargo;
    
    /**
     * @var \DateTime|null
     *
     * @Column(name="dt_carrerainv", type="date", nullable=true)
     */
    private $dtCarrerainv;


    /**
     * @var \DateTime|null
     *
     * @Column(name="alta", type="date", nullable=true)
     */
    private $alta;
    
     /**
     * @var \DateTime|null
     *
     * @Column(name="baja", type="date", nullable=true)
     */
    private $baja;
    
     /**
     * @var \DateTime|null
     *
     * @Column(name="cambio", type="date", nullable=true)
     */
    private $cambio;
    
    /**
     * @var \DateTime|null
     *
     * @Column(name="desde", type="datetime", nullable=true)
     */
    private $desde;
    
     /**
     * @var \DateTime|null
     *
     * @Column(name="hasta", type="datetime", nullable=true)
     */
    private $hasta;
    
    /**
     * @var string|null
     *
     * @Column(name="consecuencias", type="text", nullable=true)
     */
    private $consecuencias;
    
    /**
     * @var string|null
     *
     * @Column(name="motivos", type="text", nullable=true)
     */
    private $motivos;
    
     /**
     * @var string|null
     *
     * @Column(name="reduccion", type="text", nullable=true)
     */
    private $reduccion;

    

    /**
     * @var string|null
     *
     * @Column(name="motivo", type="text", nullable=true)
     */
    private $motivo;

   

    /**
     * @var string|null
     *
     * @Column(name="tipobeca", type="string", length=255, nullable=true)
     */
    private $tipobeca;

    /**
     * @var string|null
     *
     * @Column(name="orgbeca", type="string", length=255, nullable=true)
     */
    private $orgbeca;

  

    
   

    /**
     * @var \DateTime|null
     *
     * @Column(name="dt_beca", type="date", nullable=true)
     */
    private $dtBeca;

   

    /**
     * @var \DateTime|null
     *
     * @Column(name="dt_becaEstimulo", type="date", nullable=true)
     */
    private $dtBecaestimulo;

    /**
     * @var boolean|null
     *
     * @Column(name="bl_becaEstimulo", type="boolean", nullable=true)
     */
    private $blBecaestimulo;

    /**
     * @var \DateTime|null
     *
     * @Column(name="dt_becaEstimuloHasta", type="date", nullable=true)
     */
    private $dtBecaestimulohasta;

    /**
     * @var \DateTime|null
     *
     * @Column(name="dt_becaHasta", type="date", nullable=true)
     */
    private $dtBecahasta;

    /**
     * @var \Cargo
     *
     * @ManyToOne(targetEntity="Cargo")
     * @JoinColumns({
     *   @JoinColumn(name="cargo_oid", referencedColumnName="oid")
     * })
     */
    private $cargo;

    /**
     * @var \Carrerainv
     *
     * @ManyToOne(targetEntity="Carrerainv")
     * @JoinColumns({
     *   @JoinColumn(name="carrerainv_oid", referencedColumnName="oid")
     * })
     */
    private $carrerainv;

    /**
     * @var \Categoria
     *
     * @ManyToOne(targetEntity="Categoria")
     * @JoinColumns({
     *   @JoinColumn(name="categoria_oid", referencedColumnName="oid")
     * })
     */
    private $categoria;

    /**
     * @var \Deddoc
     *
     * @ManyToOne(targetEntity="Deddoc")
     * @JoinColumns({
     *   @JoinColumn(name="deddoc_oid", referencedColumnName="oid")
     * })
     */
    private $deddoc;

    /**
     * @var \Facultad
     *
     * @ManyToOne(targetEntity="Facultad")
     * @JoinColumns({
     *   @JoinColumn(name="facultad_oid", referencedColumnName="oid")
     * })
     */
    private $facultad;

    /**
     * @var \Organismo
     *
     * @ManyToOne(targetEntity="Organismo")
     * @JoinColumns({
     *   @JoinColumn(name="organismo_oid", referencedColumnName="oid")
     * })
     */
    private $organismo;

    /**
     * @var \Integrante
     *
     * @ManyToOne(targetEntity="Integrante")
     * @JoinColumns({
     *   @JoinColumn(name="integrante_oid", referencedColumnName="oid")
     * })
     */
    private $integrante;

   
    
     /**
     * @var \Tipo
     *
     * @ManyToOne(targetEntity="TipoInvestigador")
     * @JoinColumns({
     *   @JoinColumn(name="tipo_oid", referencedColumnName="oid")
     * })
     */
    private $tipo;
    
    /**
     * @var \Estado
     *
     * @ManyToOne(targetEntity="EstadoIntegrante")
     * @JoinColumns({
     *   @JoinColumn(name="estado_oid", referencedColumnName="oid")
     * })
     */
    private $estado;
    
    /**
     * @ManyToOne(targetEntity="Cose\Security\model\User",cascade={"merge"})
     * @JoinColumn(name="user_oid", referencedColumnName="oid")
     * 
     * usuario q generó la operación
     **/
    private $user;

	public function __construct(){
	}

	

    
    

	public function getHorasinv()
	{
	    return $this->horasinv;
	}

	public function setHorasinv($horasinv)
	{
	    $this->horasinv = $horasinv;
	}

	public function getAlta()
	{
	    return $this->alta;
	}

	public function setAlta($alta)
	{
	    $this->alta = $alta;
	}

	public function getBaja()
	{
	    return $this->baja;
	}

	public function setBaja($baja)
	{
	    $this->baja = $baja;
	}

	public function getCambio()
	{
	    return $this->cambio;
	}

	public function setCambio($cambio)
	{
	    $this->cambio = $cambio;
	}

	public function getDesde()
	{
	    return $this->desde;
	}

	public function setDesde($desde)
	{
	    $this->desde = $desde;
	}

	public function getHasta()
	{
	    return $this->hasta;
	}

	public function setHasta($hasta)
	{
	    $this->hasta = $hasta;
	}

	public function getConsecuencias()
	{
	    return $this->consecuencias;
	}

	public function setConsecuencias($consecuencias)
	{
	    $this->consecuencias = $consecuencias;
	}

	public function getMotivos()
	{
	    return $this->motivos;
	}

	public function setMotivos($motivos)
	{
	    $this->motivos = $motivos;
	}

	public function getReduccion()
	{
	    return $this->reduccion;
	}

	public function setReduccion($reduccion)
	{
	    $this->reduccion = $reduccion;
	}

	public function getMotivo()
	{
	    return $this->motivo;
	}

	public function setMotivo($motivo)
	{
	    $this->motivo = $motivo;
	}

	public function getTipobeca()
	{
	    return $this->tipobeca;
	}

	public function setTipobeca($tipobeca)
	{
	    $this->tipobeca = $tipobeca;
	}

	public function getOrgbeca()
	{
	    return $this->orgbeca;
	}

	public function setOrgbeca($orgbeca)
	{
	    $this->orgbeca = $orgbeca;
	}

	public function getDtBeca()
	{
	    return $this->dtBeca;
	}

	public function setDtBeca($dtBeca)
	{
	    $this->dtBeca = $dtBeca;
	}

	public function getDtBecaestimulo()
	{
	    return $this->dtBecaestimulo;
	}

	public function setDtBecaestimulo($dtBecaestimulo)
	{
	    $this->dtBecaestimulo = $dtBecaestimulo;
	}

	public function getBlBecaestimulo()
	{
	    return $this->blBecaestimulo;
	}

	public function setBlBecaestimulo($blBecaestimulo)
	{
	    $this->blBecaestimulo = $blBecaestimulo;
	}

	public function getDtBecaestimulohasta()
	{
	    return $this->dtBecaestimulohasta;
	}

	public function setDtBecaestimulohasta($dtBecaestimulohasta)
	{
	    $this->dtBecaestimulohasta = $dtBecaestimulohasta;
	}

	public function getDtBecahasta()
	{
	    return $this->dtBecahasta;
	}

	public function setDtBecahasta($dtBecahasta)
	{
	    $this->dtBecahasta = $dtBecahasta;
	}

	public function getCargo()
	{
	    return $this->cargo;
	}

	public function setCargo($cargo)
	{
	    $this->cargo = $cargo;
	}

	public function getCarrerainv()
	{
	    return $this->carrerainv;
	}

	public function setCarrerainv($carrerainv)
	{
	    $this->carrerainv = $carrerainv;
	}

	public function getCategoria()
	{
	    return $this->categoria;
	}

	public function setCategoria($categoria)
	{
	    $this->categoria = $categoria;
	}

	public function getDeddoc()
	{
	    return $this->deddoc;
	}

	public function setDeddoc($deddoc)
	{
	    $this->deddoc = $deddoc;
	}

	public function getFacultad()
	{
	    return $this->facultad;
	}

	public function setFacultad($facultad)
	{
	    $this->facultad = $facultad;
	}

	public function getOrganismo()
	{
	    return $this->organismo;
	}

	public function setOrganismo($organismo)
	{
	    $this->organismo = $organismo;
	}

	public function getIntegrante()
	{
	    return $this->integrante;
	}

	public function setIntegrante($integrante)
	{
	    $this->integrante = $integrante;
	}

	public function getTipo()
	{
	    return $this->tipo;
	}

	public function setTipo($tipo)
	{
	    $this->tipo = $tipo;
	}

	public function getEstado()
	{
	    return $this->estado;
	}

	public function setEstado($estado)
	{
	    $this->estado = $estado;
	}
	
	

	public function getUser()
	{
	    return $this->user;
	}

	public function setUser($user)
	{
	    $this->user = $user;
	}
	
	public function getCargoDed(){
		if (!empty($this->getCargo()) && ($this->getCargo()!='No declarado')) {
			return $this->getCargo().' - '.$this->getDeddoc();
		}
		
	}
	

   
    
	public function getCarrera(){
		if (!empty($this->getCarrerainv())&& ($this->getCarrerainv()!='No posee')) {
			return $this->getCarrerainv().' - '.$this->getOrganismo()->getCodigo();
		}
		
	}
	
	public function getBecas(){
		if (($this->getTipobeca())) {
			return $this->getTipobeca().' - '.$this->getOrgbeca().' ( '.SecytUtils::formatDateToView($this->getDtBeca()).'-'.SecytUtils::formatDateToView($this->getDtBecahasta()).')';
		}
		elseif (($this->getBlBecaestimulo()=='1')) {
			return 'Beca EVC ( '.SecytUtils::formatDateToView($this->getDtBecaestimulo()).'-'.SecytUtils::formatDateToView($this->getDtBecaestimulohasta()).')';
		}
		
	}
	
	public function getUsuario()
	{
	    return $this->getUser()->getName();
	}

	public function getDtCargo()
	{
	    return $this->dtCargo;
	}

	public function setDtCargo($dtCargo)
	{
	    $this->dtCargo = $dtCargo;
	}

	public function getDtCarrerainv()
	{
	    return $this->dtCarrerainv;
	}

	public function setDtCarrerainv($dtCarrerainv)
	{
	    $this->dtCarrerainv = $dtCarrerainv;
	}
}
