package simpleweb.model;

import java.util.Date;;

public record Post(
    Date postedAt,
    String article
){}

