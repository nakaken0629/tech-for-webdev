class PostsController < ApplicationController
  def index
    @posts = Post.all()
  end

  def create
    post = Post.new(post_params)
    post.posted_at = DateTime.now
    post.save()

    @posts = Post.all()
    render "posts/index"
  end

  private
  
  def post_params
    params.require(:post).permit(:article)
  end

end
