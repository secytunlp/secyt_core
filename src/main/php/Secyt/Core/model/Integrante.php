<?php
namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;
/**
 * Integrante
 *
 * @Entity @Table(name="secyt_integrante", indexes={@Index(name="FK_secyt_integrante_secyt_proyecto", columns={"proyecto_oid"}), @Index(name="FK_secyt_integrante_secyt_categoria", columns={"categoria_oid"}), @Index(name="FK_secyt_integrante_secyt_carrerainv", columns={"carrerainv_oid"}), @Index(name="FK_secyt_integrante_secyt_organismo", columns={"organismo_oid"}), @Index(name="FK_secyt_integrante_secyt_facultad", columns={"facultad_oid"}), @Index(name="FK_secyt_integrante_secyt_cargo", columns={"cargo_oid"}), @Index(name="FK_secyt_integrante_secyt_deddoc", columns={"deddoc_oid"}), @Index(name="FK_secyt_integrante_secyt_universidad", columns={"universidad_oid"}), @Index(name="FK_secyt_integrante_secyt_titulo", columns={"titulo_oid"}), @Index(name="FK_secyt_integrante_secyt_unidad", columns={"unidad_oid"}), @Index(name="FK_secyt_integrante_secyt_titulo_2", columns={"titulopost_oid"}), @Index(name="FK_secyt_integrante_secyt_docente", columns={"docente_oid"}), @Index(name="FK_secyt_integrante_secyt_tipo", columns={"tipo_oid"}), @Index(name="FK_secyt_integrante_secyt_estado", columns={"estado_oid"})})
 */
class Integrante extends Entity{
   

    /**
     * @var string
     *
     * @Column(name="curriculum", type="string", nullable=true)
     */
    private $curriculum;
    
    /**
     * @var string
     *
     * @Column(name="resolucionBeca", type="string", nullable=true)
     */
    private $resolucionBeca;

    /**
     * @var string
     *
     * @Column(name="actividades", type="string", nullable=true)
     */
    private $actividades;

    /**
     * @var int
     *
     * @Column(name="horasinv", type="integer", nullable=true)
     */
    private $horasinv;

    /**
     * @var int
     *
     * @Column(name="horasInvAnt", type="integer", nullable=true)
     */
    private $horasInvAnt;


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
     * @Column(name="mail", type="string", length=255, nullable=true)
     */
    private $mail;

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
     * @var \Proyecto
     *
     
     * @ManyToOne(targetEntity="Proyecto", inversedBy="integrantes")
     * @JoinColumn(name="proyecto_oid", referencedColumnName="oid")
     * @var Venta
     **/
    
    private $proyecto;

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
    
    /**
     * @var \Docente
     *
     * @ManyToOne(targetEntity="Docente")
     * @JoinColumns({
     *   @JoinColumn(name="docente_oid", referencedColumnName="oid")
     * })
     */
    private $docente;
    
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

	public function __construct(){
	}

	

    public function getCurriculum()
    {
        return $this->curriculum;
    }

    public function setCurriculum($curriculum)
    {
        $this->curriculum = $curriculum;
    }

    public function getActividades()
    {
        return $this->actividades;
    }

    public function setActividades($actividades)
    {
        $this->actividades = $actividades;
    }

    public function getHorasinv()
    {
        return $this->horasinv;
    }

    public function setHorasinv($horasinv)
    {
        $this->horasinv = $horasinv;
    }

    public function getHorasInvAnt()
    {
        return $this->horasInvAnt;
    }

    public function setHorasInvAnt($horasInvAnt)
    {
        $this->horasInvAnt = $horasInvAnt;
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

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
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

    public function getDtCarrerainv()
    {
        return $this->dtCarrerainv;
    }

    public function setDtCarrerainv($dtCarrerainv)
    {
        $this->dtCarrerainv = $dtCarrerainv;
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

    public function getProyecto()
    {
        return $this->proyecto;
    }

    public function setProyecto($proyecto)
    {
        $this->proyecto = $proyecto;
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

    public function getDocente()
    {
        return $this->docente;
    }

    public function setDocente($docente)
    {
        $this->docente = $docente;
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
    
	public function getInvestigador()
    {
        if ($this->getDocente()) {
        	return $this->getDocente()->getApellido().', '.$this->getDocente()->getNombre();
        }
        else return '';
    	
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
		if (($this->getBecario()==1)) {
			return $this->getTipobeca().' - '.$this->getOrgbeca().' ( '.SecytUtils::formatDateToView($this->getDtBeca()).'-'.SecytUtils::formatDateToView($this->getDtBecahasta()).')';
		}
		elseif (($this->getBlBecaestimulo()==1)) {
			return 'Beca EVC ( '.SecytUtils::formatDateToView($this->getDtBecaestimulo()).'-'.SecytUtils::formatDateToView($this->getDtBecaestimulohasta()).')';
		}
		else{
			return '';
		}
		
	}
	
	public function getProyectoIntegrante(){
		
		if ($this->getProyecto() && $this->getDocente()) {
			return $this->getProyecto()->getCodigo().' - '.$this->getDocente()->getInvestigador();
		} 
		else return '';
		
	}
    
}
