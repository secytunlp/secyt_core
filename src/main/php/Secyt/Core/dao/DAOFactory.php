<?php
namespace Secyt\Core\dao;

/**
 * Factory de DAOs
 *  
 * @author Marcos
 *
 */
use Secyt\Core\dao\impl\ProvinciaDoctrineDAO;
use Secyt\Core\dao\impl\CategoriaDoctrineDAO;
use Secyt\Core\dao\impl\CarrerainvDoctrineDAO;
use Secyt\Core\dao\impl\OrganismoDoctrineDAO;
use Secyt\Core\dao\impl\CatDoctrineDAO;
use Secyt\Core\dao\impl\CargoDoctrineDAO;
use Secyt\Core\dao\impl\FacultadDoctrineDAO;
use Secyt\Core\dao\impl\DeddocDoctrineDAO;
use Secyt\Core\dao\impl\UniversidadDoctrineDAO;
use Secyt\Core\dao\impl\TituloDoctrineDAO;
use Secyt\Core\dao\impl\TipounidadDoctrineDAO;
use Secyt\Core\dao\impl\UnidadDoctrineDAO;
use Secyt\Core\dao\impl\DocenteDoctrineDAO;
use Secyt\Core\dao\impl\ProyectoDoctrineDAO;
use Secyt\Core\dao\impl\TipoAcreditacionDoctrineDAO;
use Secyt\Core\dao\impl\EstadoProyectoDoctrineDAO;
use Secyt\Core\dao\impl\DisciplinaDoctrineDAO;
use Secyt\Core\dao\impl\EspecialidadDoctrineDAO;
use Secyt\Core\dao\impl\CampoDoctrineDAO;
use Secyt\Core\dao\impl\IntegranteDoctrineDAO;
use Secyt\Core\dao\impl\TipoInvestigadorDoctrineDAO;
use Secyt\Core\dao\impl\EstadoIntegranteDoctrineDAO;
use Secyt\Core\dao\impl\IntegranteEstadoDoctrineDAO;

class DAOFactory {

	
	/**
	 * DAO para Provincia.
	 * 
	 * @return IProvincia
	 */
	public static function getProvinciaDAO(){
	
		return new ProvinciaDoctrineDAO();	
	}
	
	/**
	 * DAO para Categoria.
	 * 
	 * @return ICategoria
	 */
	public static function getCategoriaDAO(){
	
		return new CategoriaDoctrineDAO();	
	}
	
	/**
	 * DAO para Carrerainv.
	 * 
	 * @return ICarrerainv
	 */
	public static function getCarrerainvDAO(){
	
		return new CarrerainvDoctrineDAO();	
	}
	
	/**
	 * DAO para Organismo.
	 * 
	 * @return IOrganismo
	 */
	public static function getOrganismoDAO(){
	
		return new OrganismoDoctrineDAO();	
	}
	
	/**
	 * DAO para Cat.
	 * 
	 * @return ICat
	 */
	public static function getCatDAO(){
	
		return new CatDoctrineDAO();	
	}
	
	/**
	 * DAO para Facultad.
	 * 
	 * @return IFacultad
	 */
	public static function getFacultadDAO(){
	
		return new FacultadDoctrineDAO();	
	}
	
	/**
	 * DAO para Cargo.
	 * 
	 * @return ICargo
	 */
	public static function getCargoDAO(){
	
		return new CargoDoctrineDAO();	
	}
	
	/**
	 * DAO para Deddoc.
	 * 
	 * @return IDeddoc
	 */
	public static function getDeddocDAO(){
	
		return new DeddocDoctrineDAO();	
	}
	
	/**
	 * DAO para Universidad.
	 * 
	 * @return IUniversidad
	 */
	public static function getUniversidadDAO(){
	
		return new UniversidadDoctrineDAO();	
	}
	
	/**
	 * DAO para Titulo.
	 * 
	 * @return ITitulo
	 */
	public static function getTituloDAO(){
	
		return new TituloDoctrineDAO();	
	}
	
	/**
	 * DAO para Tipounidad.
	 * 
	 * @return ITipounidad
	 */
	public static function getTipounidadDAO(){
	
		return new TipounidadDoctrineDAO();	
	}
	
	/**
	 * DAO para Unidad.
	 * 
	 * @return IUnidad
	 */
	public static function getUnidadDAO(){
	
		return new UnidadDoctrineDAO();	
	}
	
	/**
	 * DAO para Docente.
	 * 
	 * @return IDocente
	 */
	public static function getDocenteDAO(){
	
		return new DocenteDoctrineDAO();	
	}
	
	/**
	 * DAO para Proyecto.
	 * 
	 * @return IProyecto
	 */
	public static function getProyectoDAO(){
	
		return new ProyectoDoctrineDAO();	
	}
	
	/**
	 * DAO para TipoAcreditacion.
	 * 
	 * @return ITipoAcreditacion
	 */
	public static function getTipoAcreditacionDAO(){
	
		return new TipoAcreditacionDoctrineDAO();	
	}
	
	/**
	 * DAO para EstadoProyecto.
	 * 
	 * @return IEstadoProyecto
	 */
	public static function getEstadoProyectoDAO(){
	
		return new EstadoProyectoDoctrineDAO();	
	}
	
	/**
	 * DAO para Disciplina.
	 * 
	 * @return IDisciplina
	 */
	public static function getDisciplinaDAO(){
	
		return new DisciplinaDoctrineDAO();	
	}
	
	/**
	 * DAO para Especialidad.
	 * 
	 * @return IEspecialidad
	 */
	public static function getEspecialidadDAO(){
	
		return new EspecialidadDoctrineDAO();	
	}
	
	/**
	 * DAO para Campo.
	 * 
	 * @return ICampo
	 */
	public static function getCampoDAO(){
	
		return new CampoDoctrineDAO();	
	}
	
	/**
	 * DAO para Integrante.
	 * 
	 * @return IIntegrante
	 */
	public static function getIntegranteDAO(){
	
		return new IntegranteDoctrineDAO();	
	}
	
	/**
	 * DAO para TipoInvestigador.
	 * 
	 * @return ITipoInvestigador
	 */
	public static function getTipoInvestigadorDAO(){
	
		return new TipoInvestigadorDoctrineDAO();	
	}
	
	/**
	 * DAO para EstadoIntegrante.
	 * 
	 * @return IEstadoIntegrante
	 */
	public static function getEstadoIntegranteDAO(){
	
		return new EstadoIntegranteDoctrineDAO();	
	}
	
	/**
	 * DAO para IntegranteEstado.
	 * 
	 * @return IIntegranteEstado
	 */
	public static function getIntegranteEstadoDAO(){
	
		return new IntegranteEstadoDoctrineDAO();	
	}
	
}
