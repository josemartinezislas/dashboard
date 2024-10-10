Migracion >
Se adicionaron:
 $table->integer('rol_id')->default(3);
 $table->boolean('status')->default(true);

seeder >
    Estatus
    Fase
    Municipios
    Proyectos
    Rol
    Sector
    Seguimiento
    Tipo

=========| seeder y factory |=========
php artisan tinker
>>>User::factory()->count(5)->create()

==============| Forms |===============
proyCreateForm
proyEditForm

userEditForms (para el modelo Users::)