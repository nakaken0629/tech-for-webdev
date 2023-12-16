package simpleweb.controller;

import java.util.Date;
import java.util.List;

import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;

import simpleweb.model.Post;

@Controller
public class PostController {
    private final JdbcTemplate jdbcTemplate;

    public PostController(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    private List<Post> getPosts() {
        String sql = "select posted_at, article from post";
        return jdbcTemplate.query(sql, (rs, rowNum) ->
            new Post(rs.getDate("posted_at"), rs.getString("article"))
        );
    }

    @GetMapping("/")
    String postGet(Model model) {
        List<Post> posts = getPosts();
        model.addAttribute("posts", posts);
        return "post";
    }

    @PostMapping("/")
    String postPost(@ModelAttribute Post post, Model model) {
        String sql = "insert into post (posted_at, article) values (?, ?)";
        jdbcTemplate.update(sql, new Date(), post.article());
        List<Post> posts = getPosts();
        model.addAttribute("posts", posts);
        return "post";
    }
}
