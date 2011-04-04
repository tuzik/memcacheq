bin_PROGRAMS = memcacheq
memcacheq_SOURCES = memcacheq.c item.c memcacheq.h thread.c bdb.c stats.c

SUBDIRS = doc tools conf
EXTRA_DIST = doc tools conf CREDITS AUTHORS LICENSE

dist-hook:
	rm -rf $(distdir)/doc/.svn/
	rm -rf $(distdir)/tools/.svn/
	rm -rf $(distdir)/conf/.svn/
