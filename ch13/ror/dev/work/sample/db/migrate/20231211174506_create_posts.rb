class CreatePosts < ActiveRecord::Migration[7.1]
  def change
    create_table :posts do |t|
      t.datetime :posted_at
      t.string :article

      t.timestamps
    end
  end
end
