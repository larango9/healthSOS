class ApplicationController < ActionController::Base
  protect_from_forgery

  def after_sign_in_path_for(resource)
  	if resource.is_a?(Admin)
  		admins_page_path(@admins)
  	else
      if resource.is_a?(Patient)
        user_dashboard_dashboard_path(@user_dashboard)
      else
        root_path
      end
    end
  end

  # Overwriting the sign_out redirect path method
  def after_sign_out_path_for(resource_or_scope)
    root_path
  end

end
