ALTER TABLE polcode_employee ADD am INT DEFAULT NULL;
ALTER TABLE polcode_employee ADD CONSTRAINT FK_28292B3EE3C55FC FOREIGN KEY (am) REFERENCES polcode_am (id);
CREATE INDEX IDX_28292B3EE3C55FC ON polcode_employee (am);
ALTER TABLE polcode_employee_audit ADD am INT DEFAULT NULL;

CREATE TABLE polcode_employee_projects (employee_id INT NOT NULL, project_id INT NOT NULL, INDEX IDX_816668908C03F15C (employee_id), INDEX IDX_81666890166D1F9C (project_id), PRIMARY KEY(employee_id, project_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
ALTER TABLE polcode_employee_projects ADD CONSTRAINT FK_816668908C03F15C FOREIGN KEY (employee_id) REFERENCES polcode_employee (id);
ALTER TABLE polcode_employee_projects ADD CONSTRAINT FK_81666890166D1F9C FOREIGN KEY (project_id) REFERENCES polcode_project (id);

ALTER TABLE polcode_project ADD am INT DEFAULT NULL;
ALTER TABLE polcode_project ADD CONSTRAINT FK_F34ED32CE3C55FC FOREIGN KEY (am) REFERENCES polcode_am (id);
CREATE INDEX IDX_F34ED32CE3C55FC ON polcode_project (am);
ALTER TABLE polcode_project_audit ADD am INT DEFAULT NULL;
