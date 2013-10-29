class AddTelephoneToAdmin < ActiveRecord::Migration
  def change
    add_column :admins, :Telephone, :string
  end
end
