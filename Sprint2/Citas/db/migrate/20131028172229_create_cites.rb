class CreateCites < ActiveRecord::Migration
  def change
    create_table :cites do |t|
      t.string :nombre_paciente
      t.date :fecha
      t.string :nombre_medico
      t.string :especialidad_medico

      t.timestamps
    end
  end
end
