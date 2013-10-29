class Cite < ActiveRecord::Base
  attr_accessible :especialidad_medico, :fecha, :nombre_medico, :nombre_paciente
   validates_uniqueness_of :fecha, scope: :nombre_medico
   has_one :usuario
end
