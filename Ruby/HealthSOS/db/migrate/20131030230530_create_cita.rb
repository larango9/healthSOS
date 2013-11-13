class CreateCita < ActiveRecord::Migration
  def change
    create_table :cita do |t|
      t.string :cedulaPaciente
      t.string :cedulaDoctor
      t.datetime :fecha

      t.timestamps
    end
  end
end
