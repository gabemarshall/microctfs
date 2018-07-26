package com.xakcop.xxe;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement
public class Msg {

    int id;
    String type;
    String content;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getContent() {
        return content;
    }

    public void setContent(String content) {
        this.content = content;
    }
}
