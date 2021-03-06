class PostsController < ApplicationController

	def index
    @posts = Post.all
  end

  def show
    @post = Post.find(params[:id])
  end

  def edit
    @post = Post.find(params[:id])
  end

  def update
    @post = Post.find(params[:id])

    if @post.update(post_params)
      redirect_to action: :show, id: @post.id
    else
      render 'edit'
    end
  end

  def posts
  	@post = Post.new
  end

  def create
    @post = Post.new(params[:post])

    if @post.save
      redirect_to action: :show, id: @post.id
    else
      render 'new'
    end
  end

  private

    def post_params
      params.require(:post).permit(:title, :text)
    end
	
end
