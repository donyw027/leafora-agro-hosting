<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    private $table = 'blog';

    public function get_published($limit = 10, $offset = 0)
    {
        return $this->db->select('id,title,slug,created_at')
            ->from($this->table)
            ->where('status', 'publish')
            ->order_by('created_at', 'DESC')
            ->limit($limit, $offset)
            ->get()->result();
    }

    public function find_by_slug($slug)
    {
        return $this->db->select("
        id, title, slug, content, created_at,
        CASE
            WHEN foto IS NULL OR foto='' THEN ''
            WHEN foto REGEXP '^(http|https)://' THEN foto
            ELSE CONCAT('uploads/blog/', foto)
        END AS thumbnail
    ")
            ->from('blog')
            ->where(['slug' => $slug, 'status' => 'publish'])  // atau 'published' -> pilih satu dan konsisten
            ->get()->row();
    }

    public function get_recent($limit = 5, $exclude_slug = null)
    {
        $this->db->select('title, slug, created_at')
            ->from('blog')
            ->where('status', 'publish')        // atau 'published' -> konsistenkan
            ->order_by('created_at', 'DESC')
            ->limit($limit);

        if ($exclude_slug) {
            $this->db->where('slug !=', $exclude_slug);   // supaya tidak menampilkan artikel yang sedang dibuka
        }

        return $this->db->get()->result();
    }
}
