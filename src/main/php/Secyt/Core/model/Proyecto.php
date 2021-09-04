<?php
namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;
/**
 * Docente
 *
 * @Entity @Table(name="secyt_proyecto", indexes={@Index(name="FK_secyt_proyecto_secyt_campo", columns={"campo_oid"}), @Index(name="FK_secyt_proyecto_secyt_especialidad", columns={"especialidad_oid"}), @Index(name="FK_secyt_proyecto_secyt_disciplina", columns={"disciplina_oid"}), @Index(name="FK_secyt_proyecto_secyt_estado", columns={"estado_oid"}), @Index(name="FK_secyt_proyecto_secyt_facultad", columns={"facultad_oid"}), @Index(name="FK_secyt_proyecto_secyt_tipo", columns={"tipoAcreditacion_oid"})})
 */
class Proyecto extends Entity{
   

    /**
     * @var string
     *
     * @Column(name="titulo", type="string", nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @Column(name="codigo", type="string", length=100, nullable=false)
     */
    private $codigo;

   

    /**
     * @var \DateTime|null
     *
     * @Column(name="inicio", type="date", nullable=true)
     */
    private $inicio;
    
    /**
     * @var \DateTime|null
     *
     * @Column(name="fin", type="date", nullable=true)
     */
    private $fin;

    /**
     * @var string|null
     *
     * @Column(name="tipo", type="string", length=1, nullable=true)
     */
    private $tipo;

    /**
     * @var string|null
     *
     * @Column(name="linea", length=50, nullable=true)
     */
    private $linea;
    
    /**
     * @var int|null
     *
     * @Column(name="duracion", type="integer", nullable=true)
     */
    private $duracion;

    /**
     * @var string|null
     *
     * @Column(name="abstract", type="text", nullable=true)
     */
    private $abstract;
    
    /**
     * @var string|null
     *
     * @Column(name="abstractEng", type="text", nullable=true)
     */
    private $abstractEng;

    /**
     * @var string|null
     *
     * @Column(name="clave1", type="string", nullable=true)
     */
    private $clave1;
    
    /**
     * @var string|null
     *
     * @Column(name="clave2", type="string", nullable=true)
     */
    private $clave2;
    /**
     * @var string|null
     *
     * @Column(name="clave3", type="string", nullable=true)
     */
    private $clave3;
    /**
     * @var string|null
     *
     * @Column(name="clave4", type="string", nullable=true)
     */
    private $clave4;
    /**
     * @var string|null
     *
     * @Column(name="clave5", type="string", nullable=true)
     */
    private $clave5;
    /**
     * @var string|null
     *
     * @Column(name="clave6", type="string", nullable=true)
     */
    private $clave6;
    
    /**
     * @var string|null
     *
     * @Column(name="claveEng1", type="string", nullable=true)
     */
    private $claveEng1;
    
    /**
     * @var string|null
     *
     * @Column(name="claveEng2", type="string", nullable=true)
     */
    private $claveEng2;
    /**
     * @var string|null
     *
     * @Column(name="claveEng3", type="string", nullable=true)
     */
    private $claveEng3;
    /**
     * @var string|null
     *
     * @Column(name="claveEng4", type="string", nullable=true)
     */
    private $claveEng4;
    /**
     * @var string|null
     *
     * @Column(name="claveEng5", type="string", nullable=true)
     */
    private $claveEng5;
    /**
     * @var string|null
     *
     * @Column(name="claveEng6", type="string", nullable=true)
     */
    private $claveEng6;

  

    /**
     * @var string|null
     *
     * @Column(name="codigoSIGEVA", type="string", nullable=true)
     */
    private $codigoSIGEVA;

    
    /**
     * @var \Tipo
     *
     * @ManyToOne(targetEntity="TipoAcreditacion")
     * @JoinColumns({
     *   @JoinColumn(name="tipoAcreditacion_oid", referencedColumnName="oid")
     * })
     */
    private $tipoAcreditacion;

    /**
     * @var \Disciplina
     *
     * @ManyToOne(targetEntity="Disciplina")
     * @JoinColumns({
     *   @JoinColumn(name="disciplina_oid", referencedColumnName="oid")
     * })
     */
    private $disciplina;

    /**
     * @var \Especialidad
     *
     * @ManyToOne(targetEntity="Especialidad")
     * @JoinColumns({
     *   @JoinColumn(name="especialidad_oid", referencedColumnName="oid")
     * })
     */
    private $especialidad;

    

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
     * @var \Estado
     *
     * @ManyToOne(targetEntity="EstadoProyecto")
     * @JoinColumns({
     *   @JoinColumn(name="estado_oid", referencedColumnName="oid")
     * })
     */
    private $estado;

    /**
     * @var \Campo
     *
     * @ManyToOne(targetEntity="Campo")
     * @JoinColumns({
     *   @JoinColumn(name="campo_oid", referencedColumnName="oid")
     * })
     */
    private $campo;

   

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
     * @OneToMany(targetEntity="Integrante", mappedBy="proyecto", cascade={"persist"})
     **/
    private $integrantes;

	public function __construct(){
	}

	public function __toString(){
		 return $this->getCodigo();
	}
	

	public function getTitulo()
	{
	    return $this->titulo;
	}

	public function setTitulo($titulo)
	{
	    $this->titulo = $titulo;
	}

	public function getCodigo()
	{
	    return $this->codigo;
	}

	public function setCodigo($codigo)
	{
	    $this->codigo = $codigo;
	}

	public function getInicio()
	{
	    return $this->inicio;
	}

	public function setInicio($inicio)
	{
	    $this->inicio = $inicio;
	}

	public function getFin()
	{
	    return $this->fin;
	}

	public function setFin($fin)
	{
	    $this->fin = $fin;
	}

	public function getTipo()
	{
	    return $this->tipo;
	}

	public function setTipo($tipo)
	{
	    $this->tipo = $tipo;
	}

	public function getLinea()
	{
	    return $this->linea;
	}

	public function setLinea($linea)
	{
	    $this->linea = $linea;
	}

	public function getDuracion()
	{
	    return $this->duracion;
	}

	public function setDuracion($duracion)
	{
	    $this->duracion = $duracion;
	}

	public function getAbstract()
	{
	    return $this->abstract;
	}

	public function setAbstract($abstract)
	{
	    $this->abstract = $abstract;
	}

	public function getAbstractEng()
	{
	    return $this->abstractEng;
	}

	public function setAbstractEng($abstractEng)
	{
	    $this->abstractEng = $abstractEng;
	}

	public function getClave1()
	{
	    return $this->clave1;
	}

	public function setClave1($clave1)
	{
	    $this->clave1 = $clave1;
	}

	public function getClave2()
	{
	    return $this->clave2;
	}

	public function setClave2($clave2)
	{
	    $this->clave2 = $clave2;
	}

	public function getClave3()
	{
	    return $this->clave3;
	}

	public function setClave3($clave3)
	{
	    $this->clave3 = $clave3;
	}

	public function getClave4()
	{
	    return $this->clave4;
	}

	public function setClave4($clave4)
	{
	    $this->clave4 = $clave4;
	}

	public function getClave5()
	{
	    return $this->clave5;
	}

	public function setClave5($clave5)
	{
	    $this->clave5 = $clave5;
	}

	public function getClave6()
	{
	    return $this->clave6;
	}

	public function setClave6($clave6)
	{
	    $this->clave6 = $clave6;
	}

	public function getClaveEng1()
	{
	    return $this->claveEng1;
	}

	public function setClaveEng1($claveEng1)
	{
	    $this->claveEng1 = $claveEng1;
	}

	public function getClaveEng2()
	{
	    return $this->claveEng2;
	}

	public function setClaveEng2($claveEng2)
	{
	    $this->claveEng2 = $claveEng2;
	}

	public function getClaveEng3()
	{
	    return $this->claveEng3;
	}

	public function setClaveEng3($claveEng3)
	{
	    $this->claveEng3 = $claveEng3;
	}

	public function getClaveEng4()
	{
	    return $this->claveEng4;
	}

	public function setClaveEng4($claveEng4)
	{
	    $this->claveEng4 = $claveEng4;
	}

	public function getClaveEng5()
	{
	    return $this->claveEng5;
	}

	public function setClaveEng5($claveEng5)
	{
	    $this->claveEng5 = $claveEng5;
	}

	public function getClaveEng6()
	{
	    return $this->claveEng6;
	}

	public function setClaveEng6($claveEng6)
	{
	    $this->claveEng6 = $claveEng6;
	}

	public function getCodigoSIGEVA()
	{
	    return $this->codigoSIGEVA;
	}

	public function setCodigoSIGEVA($codigoSIGEVA)
	{
	    $this->codigoSIGEVA = $codigoSIGEVA;
	}

	public function getTipoAcreditacion()
	{
	    return $this->tipoAcreditacion;
	}

	public function setTipoAcreditacion($tipoAcreditacion)
	{
	    $this->tipoAcreditacion = $tipoAcreditacion;
	}

	public function getDisciplina()
	{
	    return $this->disciplina;
	}

	public function setDisciplina($disciplina)
	{
	    $this->disciplina = $disciplina;
	}

	public function getEspecialidad()
	{
	    return $this->especialidad;
	}

	public function setEspecialidad($especialidad)
	{
	    $this->especialidad = $especialidad;
	}

	public function getFacultad()
	{
	    return $this->facultad;
	}

	public function setFacultad($facultad)
	{
	    $this->facultad = $facultad;
	}

	public function getEstado()
	{
	    return $this->estado;
	}

	public function setEstado($estado)
	{
	    $this->estado = $estado;
	}

	public function getCampo()
	{
	    return $this->campo;
	}

	public function setCampo($campo)
	{
	    $this->campo = $campo;
	}

	public function getUnidad()
	{
	    return $this->unidad;
	}

	public function setUnidad($unidad)
	{
	    $this->unidad = $unidad;
	}
	
	public function getCodigoTitulo(){
		
		 return $this->getCodigo().' - '.$this->getTitulo();
	}
	

    public function getIntegrantes()
    {
        return $this->integrantes;
    }

    public function setIntegrantes($integrantes)
    {
        $this->integrantes = $integrantes;
    }
    
  public function getDirector()
    {
		$strDirector='';
    	foreach ($this->getIntegrantes() as $integrante) {
        	$strDirector .=$integrante->getDocente()->getInvestigador();
        }
        return $strDirector;
    }
}
