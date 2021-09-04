<?php
namespace Secyt\Core\service;

/**
 * Factory de servicios
 *  
 *  
 * @author Marcos
 * @since 12-06-2015
 *
 */

use Secyt\Core\service\impl\ProvinciaServiceImpl;
use Secyt\Core\service\impl\CategoriaServiceImpl;
use Secyt\Core\service\impl\CarrerainvServiceImpl;
use Secyt\Core\service\impl\OrganismoServiceImpl;
use Secyt\Core\service\impl\CatServiceImpl;
use Secyt\Core\service\impl\FacultadServiceImpl;
use Secyt\Core\service\impl\CargoServiceImpl;
use Secyt\Core\service\impl\DeddocServiceImpl;
use Secyt\Core\service\impl\UniversidadServiceImpl;
use Secyt\Core\service\impl\TituloServiceImpl;
use Secyt\Core\service\impl\TipounidadServiceImpl;
use Secyt\Core\service\impl\UnidadServiceImpl;
use Secyt\Core\service\impl\DocenteServiceImpl;
use Secyt\Core\service\impl\ProyectoServiceImpl;
use Secyt\Core\service\impl\TipoAcreditacionServiceImpl;
use Secyt\Core\service\impl\EstadoProyectoServiceImpl;
use Secyt\Core\service\impl\DisciplinaServiceImpl;
use Secyt\Core\service\impl\EspecialidadServiceImpl;
use Secyt\Core\service\impl\CampoServiceImpl;
use Secyt\Core\service\impl\IntegranteServiceImpl;
use Secyt\Core\service\impl\TipoInvestigadorServiceImpl;
use Secyt\Core\service\impl\IntegranteEstadoServiceImpl;
use Secyt\Core\service\impl\EstadoIntegranteServiceImpl;

class ServiceFactory {


	/**
	 * Service para Provincia.
	 * 
	 * @return IProvinciaService
	 */
	public static function getProvinciaService(){
	
		return new ProvinciaServiceImpl();	
	}
	
	/**
	 * Service para Categoria.
	 * 
	 * @return ICategoriaService
	 */
	public static function getCategoriaService(){
	
		return new CategoriaServiceImpl();	
	}
	
	/**
	 * Service para Carrerainv.
	 * 
	 * @return ICarrerainvService
	 */
	public static function getCarrerainvService(){
	
		return new CarrerainvServiceImpl();	
	}
	
	/**
	 * Service para Organismo.
	 * 
	 * @return IOrganismoService
	 */
	public static function getOrganismoService(){
	
		return new OrganismoServiceImpl();	
	}
	
	/**
	 * Service para Cat.
	 * 
	 * @return ICatService
	 */
	public static function getCatService(){
	
		return new CatServiceImpl();	
	}
	
	/**
	 * Service para Facultad.
	 * 
	 * @return IFacultadService
	 */
	public static function getFacultadService(){
	
		return new FacultadServiceImpl();	
	}
	
	/**
	 * Service para Cargo.
	 * 
	 * @return ICargoService
	 */
	public static function getCargoService(){
	
		return new CargoServiceImpl();	
	}
	
	/**
	 * Service para Deddoc.
	 * 
	 * @return IDeddocService
	 */
	public static function getDeddocService(){
	
		return new DeddocServiceImpl();	
	}
	
	/**
	 * Service para Universidad.
	 * 
	 * @return IUniversidadService
	 */
	public static function getUniversidadService(){
	
		return new UniversidadServiceImpl();	
	}
	
	/**
	 * Service para Titulo.
	 * 
	 * @return ITituloService
	 */
	public static function getTituloService(){
	
		return new TituloServiceImpl();	
	}
	
	/**
	 * Service para Tipounidad.
	 * 
	 * @return ITipounidadService
	 */
	public static function getTipounidadService(){
	
		return new TipounidadServiceImpl();	
	}
	
	/**
	 * Service para Unidad.
	 * 
	 * @return IUnidadService
	 */
	public static function getUnidadService(){
	
		return new UnidadServiceImpl();	
	}
	
	/**
	 * Service para Docente.
	 * 
	 * @return IDocenteService
	 */
	public static function getDocenteService(){
	
		return new DocenteServiceImpl();	
	}
	
	/**
	 * Service para Proyecto.
	 * 
	 * @return IProyectoService
	 */
	public static function getProyectoService(){
	
		return new ProyectoServiceImpl();	
	}
	
	/**
	 * Service para TipoAcreditacion.
	 * 
	 * @return ITipoAcreditacionService
	 */
	public static function getTipoAcreditacionService(){
	
		return new TipoAcreditacionServiceImpl();	
	}
	
	/**
	 * Service para EstadoProyecto.
	 * 
	 * @return IEstadoProyectoService
	 */
	public static function getEstadoProyectoService(){
	
		return new EstadoProyectoServiceImpl();	
	}
	
	/**
	 * Service para Disciplina.
	 * 
	 * @return IDisciplinaService
	 */
	public static function getDisciplinaService(){
	
		return new DisciplinaServiceImpl();	
	}
	
	/**
	 * Service para Especialidad.
	 * 
	 * @return IEspecialidadService
	 */
	public static function getEspecialidadService(){
	
		return new EspecialidadServiceImpl();	
	}
	
	/**
	 * Service para Campo.
	 * 
	 * @return ICampoService
	 */
	public static function getCampoService(){
	
		return new CampoServiceImpl();	
	}
	
	/**
	 * Service para Integrante.
	 * 
	 * @return IIntegranteService
	 */
	public static function getIntegranteService(){
	
		return new IntegranteServiceImpl();	
	}
	
	/**
	 * Service para TipoInvestigador.
	 * 
	 * @return ITipoInvestigadorService
	 */
	public static function getTipoInvestigadorService(){
	
		return new TipoInvestigadorServiceImpl();	
	}
	
	/**
	 * Service para IntegranteEstado.
	 * 
	 * @return IIntegranteEstadoService
	 */
	public static function getIntegranteEstadoService(){
	
		return new IntegranteEstadoServiceImpl();	
	}
	
	/**
	 * Service para EstadoIntegrante.
	 * 
	 * @return IEstadoIntegranteService
	 */
	public static function getEstadoIntegranteService(){
	
		return new EstadoIntegranteServiceImpl();	
	}
	
}