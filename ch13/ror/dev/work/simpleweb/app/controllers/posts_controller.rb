class PostsController < ApplicationController
  def index
    # postsテーブルから全件取得する
    @posts = Post.all()
  end

  def create
    # postsテーブルに登録する
    post = Post.new(post_params)
    post.posted_at = DateTime.now
    post.save()

    # postsテーブルから全件取得する
    @posts = Post.all()
    render "posts/index"
  end

  private
  
  def post_params
    params.require(:post).permit(:article)
  end

end
