class AddNameToAdmin < ActiveRecord::Migration
  def change
    add_column :admins, :Name, :string
  end
end
