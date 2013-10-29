class CreatePatients < ActiveRecord::Migration
  def change
    create_table :patients do |t|
      t.string :NumDocument
      t.string :UserName
      t.string :UserLastName
      t.datetime :Birth
      t.string :Telephone

      t.timestamps
    end
  end
end
