<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $UID
 * @property string $ID
 * @property string $ETIQUETA
 * @property string $DESCRIPCION
 * @property string $CLAVE
 * @property string $EMAIL
 * @property string $PERSONA
 * @property string $FECHA_EXPIRACION
 * @property string $SESION_ACTIVA
 * @property string $FECHA_ULTIMA_CONEXION
 * @property string $ESTADO
 * @property string $FECHA_CREACION
 * @property string $FECHA_ESTADO
 * @property string $USUARIO_CREACION
 * @property string $USUARIO_ESTADO
 * @property string $USER_LDAP
 * @property PERSONA $pERSONA
 * @property CAMBIO[] $cAMBIOs
 * @property DELEGACION[] $dELEGACIONs
 * @property DELEGACION[] $dELEGACIONs
 * @property DESTINATARIOMENSAJE[] $dESTINATARIOMENSAJEs
 * @property INCIDENCIUM[] $iNCIDENCIAs
 * @property PERIODOREPORTADO[] $pERIODOREPORTADOs
 * @property PETICION[] $pETICIONs
 * @property PROYECTO[] $pROYECTOs
 * @property REPORTE[] $rEPORTEs
 * @property REPORTED[] $rEPORTEDs
 * @property ROL[] $rOLs
 * @property TAREA[] $tAREAs
 * @property TAREACAMBIO[] $tAREACAMBIOs
 */
class Usuario extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'USUARIO';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'UID';

    /**
     * @var array
     */
    protected $fillable = ['ID', 'ETIQUETA', 'DESCRIPCION', 'CLAVE', 'EMAIL', 'PERSONA', 'FECHA_EXPIRACION', 'SESION_ACTIVA', 'FECHA_ULTIMA_CONEXION', 'ESTADO', 'FECHA_CREACION', 'FECHA_ESTADO', 'USUARIO_CREACION', 'USUARIO_ESTADO', 'USER_LDAP'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pERSONA()
    {
        return $this->belongsTo('App\PERSONA', 'PERSONA', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cAMBIOs()
    {
        return $this->hasMany('App\CAMBIO', 'USUARIO', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dELEGACIONs()
    {
        return $this->hasMany('App\DELEGACION', 'USUARIO', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dELEGACIONs()
    {
        return $this->hasMany('App\DELEGACION', 'USUARIO_DELEGADO', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dESTINATARIOMENSAJEs()
    {
        return $this->hasMany('App\DESTINATARIOMENSAJE', 'USUARIO', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function iNCIDENCIAs()
    {
        return $this->hasMany('App\INCIDENCIUM', 'USUARIO', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pERIODOREPORTADOs()
    {
        return $this->hasMany('App\PERIODOREPORTADO', 'USUARIO', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pETICIONs()
    {
        return $this->hasMany('App\PETICION', 'USUARIO', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pROYECTOs()
    {
        return $this->hasMany('App\PROYECTO', 'USUARIO', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rEPORTEs()
    {
        return $this->hasMany('App\REPORTE', 'USUARIO', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rEPORTEDs()
    {
        return $this->hasMany('App\REPORTED', 'USUARIO', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rOLs()
    {
        return $this->hasMany('App\ROL', 'USUARIO', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tAREAs()
    {
        return $this->hasMany('App\TAREA', 'USUARIO', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tAREACAMBIOs()
    {
        return $this->hasMany('App\TAREACAMBIO', 'USUARIO', 'ID');
    }
}
