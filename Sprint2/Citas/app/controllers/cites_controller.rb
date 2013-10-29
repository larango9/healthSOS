class CitesController < ApplicationController
  before_filter :authenticate_usuario!

  # GET /cites
  # GET /cites.json
  def index
    @cites = Cite.all

    respond_to do |format|
      format.html # index.html.erb
      format.json { render json: @cites }
    end
  end

  # GET /cites/1
  # GET /cites/1.json
  def show
    @cite = Cite.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render json: @cite }
    end
  end

  # GET /cites/new
  # GET /cites/new.json
  def new
    @cite = Cite.new

    respond_to do |format|
      format.html # new.html.erb
      format.json { render json: @cite }
    end
  end

  # GET /cites/1/edit
  def edit
    @cite = Cite.find(params[:id])
  end

  # POST /cites
  # POST /cites.json
  def create
    @cite = Cite.new(params[:cite])

    respond_to do |format|
      if @cite.save
        format.html { redirect_to @cite, notice: 'Cite was successfully created.' }
        format.json { render json: @cite, status: :created, location: @cite }
      else
        format.html { render action: "new" }
        format.json { render json: @cite.errors, status: :unprocessable_entity }
      end
    end
  end

  # PUT /cites/1
  # PUT /cites/1.json
  def update
    @cite = Cite.find(params[:id])

    respond_to do |format|
      if @cite.update_attributes(params[:cite])
        format.html { redirect_to @cite, notice: 'Cite was successfully updated.' }
        format.json { head :no_content }
      else
        format.html { render action: "edit" }
        format.json { render json: @cite.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /cites/1
  # DELETE /cites/1.json
  def destroy
    @cite = Cite.find(params[:id])
    @cite.destroy

    respond_to do |format|
      format.html { redirect_to cites_url }
      format.json { head :no_content }
    end
  end
end
