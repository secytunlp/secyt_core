<?php
namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;
/**
 * Docente
 *
 * @Entity @Table(name="secyt_docente", uniqueConstraints={@UniqueConstraint(name="documento", columns={"documento"})}, indexes={@Index(name="FK_secyt_docente_secyt_provincia", columns={"provincia_oid"}), @Index(name="FK_secyt_docente_secyt_categoria", columns={"categoria_oid"}), @Index(name="FK_secyt_docente_secyt_carrerainv", columns={"carrerainv_oid"}), @Index(name="FK_secyt_docente_secyt_organismo", columns={"organismo_oid"}), @Index(name="FK_secyt_docente_secyt_facultad", columns={"facultad_oid"}), @Index(name="FK_secyt_docente_secyt_cargo", columns={"cargo_oid"}), @Index(name="FK_secyt_docente_secyt_deddoc", columns={"deddoc_oid"}), @Index(name="FK_secyt_docente_secyt_universidad", columns={"universidad_oid"}), @Index(name="FK_secyt_docente_secyt_titulo", columns={"titulo_oid"}), @Index(name="FK_secyt_docente_secyt_unidad", columns={"unidad_oid"}), @Index(name="FK_secyt_docente_secyt_titulo_2", columns={"titulopost_oid"})})
 */
class Docente extends Entity{
   

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @Column(name="apellido", type="string", length=100, nullable=false)
     */
    private $apellido;

    /**
     * @var int
     *
     * @Column(name="precuil", type="integer", nullable=false)
     */
    private $precuil;

    /**
     * @var int
     *
     * @Column(name="documento", type="integer", nullable=true)
     */
    private $documento;

    /**
     * @var int
     *
     * @Column(name="postcuil", type="integer", nullable=false)
     */
    private $postcuil;

    /**
     * @var \DateTime|null
     *
     * @Column(name="nacimiento", type="date", nullable=true)
     */
    private $nacimiento;

    /**
     * @var string|null
     *
     * @Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var string|null
     *
     * @Column(name="calle", type="string", length=50, nullable=true)
     */
    private $calle;

    /**
     * @var string|null
     *
     * @Column(name="nro", type="string", length=10, nullable=true)
     */
    private $nro;

    /**
     * @var string|null
     *
     * @Column(name="piso", type="string", length=10, nullable=true)
     */
    private $piso;

    /**
     * @var string|null
     *
     * @Column(name="depto", type="string", length=10, nullable=true)
     */
    private $depto;

    /**
     * @var string|null
     *
     * @Column(name="localidad", type="string", length=50, nullable=true)
     */
    private $localidad;

    /**
     * @var string|null
     *
     * @Column(name="cp", type="string", length=50, nullable=true)
     */
    private $cp;

    /**
     * @var string|null
     *
     * @Column(name="telefono", type="string", length=30, nullable=true)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @Column(name="mail", type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @var int|null
     *
     * @Column(name="dedinv", type="integer", nullable=true)
     */
    private $dedinv;

    /**
     * @var int|null
     *
     * @Column(name="nivelunidad", type="integer", nullable=true)
     */
    private $nivelunidad;

    /**
     * @var boolean|null
     *
     * @Column(name="becario", type="boolean", nullable=true)
     */
    private $becario = '0';

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
     * @Column(name="dt_carrerainv", type="date", nullable=true)
     */
    private $dtCarrerainv;
    
    /**
     * @var \DateTime|null
     *
     * @Column(name="dt_cargo", type="date", nullable=true)
     */
    private $dtCargo;

    /**
     * @var \DateTime|null
     *
     * @Column(name="dt_beca", type="date", nullable=true)
     */
    private $dtBeca;

    /**
     * @var boolean
     *
     * @Column(name="estudiante", type="boolean", nullable=false)
     */
    private $estudiante = '0';

    /**
     * @var int
     *
     * @Column(name="materias", type="integer", nullable=false)
     */
    private $materias = '0';

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
     * @var \Provincia
     *
     * @ManyToOne(targetEntity="Provincia")
     * @JoinColumns({
     *   @JoinColumn(name="provincia_oid", referencedColumnName="oid")
     * })
     */
    private $provincia;

    /**
     * @var \Titulo
     *
     * @ManyToOne(targetEntity="Titulo")
     * @JoinColumns({
     *   @JoinColumn(name="titulo_oid", referencedColumnName="oid")
     * })
     */
    private $titulo;

    /**
     * @var \Titulo
     *
     * @ManyToOne(targetEntity="Titulo")
     * @JoinColumns({
     *   @JoinColumn(name="titulopost_oid", referencedColumnName="oid")
     * })
     */
    private $titulopost;

    /**
     * @var \Unidad
     *
     * @ManyToOne(targetEntity="Unidad")
     * @JoinColumns({
     *   @JoinColumn(name="unidad_oid", referencedColumnName="oid")
     * })
     */
    private $unidad;

    /**
     * @var \Universidad
     *
     * @ManyToOne(targetEntity="Universidad")
     * @JoinColumns({
     *   @JoinColumn(name="universidad_oid", referencedColumnName="oid")
     * })
     */
    private $universidad;

	public function __construct(){
	}

	public function getNombre()
	{
	    return $this->nombre;
	}

	public function setNombre($nombre)
	{
	    $this->nombre = $nombre;
	}

	public function getApellido()
	{
	    return $this->apellido;
	}

	public function setApellido($apellido)
	{
	    $this->apellido = $apellido;
	}

	public function getPrecuil()
	{
	    return $this->precuil;
	}

	public function setPrecuil($precuil)
	{
	    $this->precuil = $precuil;
	}

	public function getDocumento()
	{
	    return $this->documento;
	}

	public function setDocumento($documento)
	{
	    $this->documento = $documento;
	}

	public function getPostcuil()
	{
	    return $this->postcuil;
	}

	public function setPostcuil($postcuil)
	{
	    $this->postcuil = $postcuil;
	}

	public function getNacimiento()
	{
	    return $this->nacimiento;
	}

	public function setNacimiento($nacimiento)
	{
	    $this->nacimiento = $nacimiento;
	}

	public function getSexo()
	{
	    return $this->sexo;
	}

	public function setSexo($sexo)
	{
	    $this->sexo = $sexo;
	}

	public function getCalle()
	{
	    return $this->calle;
	}

	public function setCalle($calle)
	{
	    $this->calle = $calle;
	}

	public function getNro()
	{
	    return $this->nro;
	}

	public function setNro($nro)
	{
	    $this->nro = $nro;
	}

	public function getPiso()
	{
	    return $this->piso;
	}

	public function setPiso($piso)
	{
	    $this->piso = $piso;
	}

	public function getDepto()
	{
	    return $this->depto;
	}

	public function setDepto($depto)
	{
	    $this->depto = $depto;
	}

	public function getLocalidad()
	{
	    return $this->localidad;
	}

	public function setLocalidad($localidad)
	{
	    $this->localidad = $localidad;
	}

	public function getCp()
	{
	    return $this->cp;
	}

	public function setCp($cp)
	{
	    $this->cp = $cp;
	}

	public function getTelefono()
	{
	    return $this->telefono;
	}

	public function setTelefono($telefono)
	{
	    $this->telefono = $telefono;
	}

	public function getMail()
	{
	    return $this->mail;
	}

	public function setMail($mail)
	{
	    $this->mail = $mail;
	}

	public function getDedinv()
	{
	    return $this->dedinv;
	}

	public function setDedinv($dedinv)
	{
	    $this->dedinv = $dedinv;
	}

	public function getNivelunidad()
	{
	    return $this->nivelunidad;
	}

	public function setNivelunidad($nivelunidad)
	{
	    $this->nivelunidad = $nivelunidad;
	}

	public function getBecario()
	{
	    return $this->becario;
	}

	public function setBecario($becario)
	{
	    $this->becario = $becario;
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

	

	public function getDtCargo()
	{
	    return $this->dtCargo;
	}

	public function setDtCargo($dtCargo)
	{
	    $this->dtCargo = $dtCargo;
	}

	public function getDtBeca()
	{
	    return $this->dtBeca;
	}

	public function setDtBeca($dtBeca)
	{
	    $this->dtBeca = $dtBeca;
	}

	public function getEstudiante()
	{
	    return $this->estudiante;
	}

	public function setEstudiante($estudiante)
	{
	    $this->estudiante = $estudiante;
	}

	public function getMaterias()
	{
	    return $this->materias;
	}

	public function setMaterias($materias)
	{
	    $this->materias = $materias;
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

	public function getProvincia()
	{
	    return $this->provincia;
	}

	public function setProvincia($provincia)
	{
	    $this->provincia = $provincia;
	}

	public function getTitulo()
	{
	    return $this->titulo;
	}

	public function setTitulo($titulo)
	{
	    $this->titulo = $titulo;
	}

	public function getTitulopost()
	{
	    return $this->titulopost;
	}

	public function setTitulopost($titulopost)
	{
	    $this->titulopost = $titulopost;
	}

	public function getUnidad()
	{
	    return $this->unidad;
	}

	public function setUnidad($unidad)
	{
	    $this->unidad = $unidad;
	}

	public function getUniversidad()
	{
	    return $this->universidad;
	}

	public function setUniversidad($universidad)
	{
	    $this->universidad = $universidad;
	}
	
	public function getCuil(){
		if (!empty($this->getDocumento())) {
			return $this->getPrecuil().'-'.str_pad($this->getDocumento(), 8).'-'.$this->getPostcuil();
		}
		
	}
	
	public function getCargoDed(){
		if (!empty($this->getCargo()) && ($this->getCargo()!='No declarado')) {
			return $this->getCargo().' - '.$this->getDeddoc();
		}
		
	}
	

    public function getDtCarrerainv()
    {
        return $this->dtCarrerainv;
    }

    public function setDtCarrerainv($dtCarrerainv)
    {
        $this->dtCarrerainv = $dtCarrerainv;
    }
    
	public function getCarrera(){
		if (!empty($this->getCarrerainv())&& ($this->getCarrerainv()!='No posee')) {
			return $this->getCarrerainv().' - '.$this->getOrganismo()->getCodigo();
		}
		
	}
	
	public function getBecas(){
		if (($this->getBecario()=='1')) {
			return $this->getTipobeca().' - '.$this->getOrgbeca().' ( '.SecytUtils::formatDateToView($this->getDtBeca()).'-'.SecytUtils::formatDateToView($this->getDtBecahasta()).')';
		}
		elseif (($this->getBlBecaestimulo()=='1')) {
			return 'Beca EVC ( '.SecytUtils::formatDateToView($this->getDtBecaestimulo()).'-'.SecytUtils::formatDateToView($this->getDtBecaestimulohasta()).')';
		}
		
	}
	
	public function getInvestigador(){
		return $this->getApellido().', '.$this->getNombre().' ('.$this->getDocumento().')';
	}
}
